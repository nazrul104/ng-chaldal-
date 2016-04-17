<?php
class CheckOutProcess extends db_connection
{
			private $conn="";
			public function __construct()
			{
				$this->conn = parent::__construct();
			}

			public function SaveOrder()
			{
				$postdata = file_get_contents("php://input");
			    $request = json_decode($postdata);
			    @$user_id = $request->user_id;
			    @$total_amount = $request->total_amount;
			    @$discount_amount = $request->discount_amount;
			    @$grand_total = $request->grand_total;
			    @$payment_type = $request->payment_type;
			    @$payment_status = $request->payment_status;
			    @$delivery_address = $request->delivery_address;
			    @$special_instruction = $request->special_instruction;
			    @$delivery_date = strtotime($request->delivery_date);
			    @$delivery_time = strtotime($request->delivery_time);
			    @$isConfirmed = $request->isConfirmed;
			    $this->conn->beginTransaction(); // also helps speed up your inserts.
				try
				{

					
					$created_date = date("Y-m-d H:i:s");
					$this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,TRUE);
					$stmt = $this->conn->prepare('INSERT INTO orders(user_id,total_amount,discount_amount,grand_total,payment_type,payment_status,special_instruction,delivery_date,delivery_address,delivery_time,isConfirmed)VALUES(:user_id,:total_amount,:discount_amount,:grand_total,:payment_type,:payment_status,:special_instruction,:delivery_date,:delivery_address,:delivery_time,:isConfirmed)');
					$stmt->execute(array(
							':user_id' => $user_id,
							':total_amount' => $total_amount,
							':discount_amount' => $discount_amount,
							':grand_total' => $grand_total,
							':payment_type' => $payment_type,
							':payment_status' => $payment_status,
							':special_instruction' => $special_instruction,
							':delivery_date' => $delivery_date,
							':delivery_address' => $delivery_address,
							':delivery_time' => $delivery_time,
							':isConfirmed' => $isConfirmed));

					
					 $order_id = $this->conn->lastInsertId(); 
					 $this->conn->commit(); 

					$output = array("status"=>"success","msg"=>"Order has been saved successfully");

					/*********************##########Insert ordered item list#########*************************/
								    $list_of_ordered_items = json_decode($request->datalist);
								    $order_item_list =array();
								    foreach ($list_of_ordered_items->OrderList as $key => $value) {
								    	$single_item = array();
								    	$single_item["order_id"] = $order_id;
								    	$single_item["item_id"] = $value->item_id;
								    	$single_item["item_units"] = $value->item_unit;
								    	$single_item["item_units_price"] = $value->item_price;
								    	array_push($order_item_list, $single_item);
								    }
									self::InsertItems($order_item_list);
					/****************##############E>>>>N>>>>>D###############********************/
					echo json_encode($output);
				} catch(PDOException $e) 
				{
					$this->conn->rollback(); 
					$output = array("status"=>"error","msg"=>$e->getMessage());
					echo json_encode($output);
				}
			}

			private function placeholders($text, $count=0, $separator=","){
			    $result = array();
			    if($count > 0){
			        for($x=0; $x<$count; $x++){
			            $result[] = $text;
			        }
			    }

			    return implode($separator, $result);
			}
			public function InsertItems($data)
			{
				$datafields = array('order_id' ,'item_id', 'item_units', 'item_units_price');
				$this->conn->beginTransaction(); // also helps speed up your inserts.
				$insert_values = array();
				foreach($data as $d)
				{
				    $question_marks[] = '('  . self::placeholders('?', sizeof($d)) . ')';
				    $insert_values = array_merge($insert_values, array_values($d));
				}
				$sql = "INSERT INTO order_items (" . implode(",", $datafields ) . ") VALUES " . implode(',', $question_marks);
				$stmt = $this->conn->prepare ($sql);
				try 
				{
				    $stmt->execute($insert_values);
				    $this->conn->commit();
				} catch (PDOException $e){
					$this->conn->rollback(); 
					$output = array("status"=>"error","msg"=>$e->getMessage());
					echo json_encode($output);
				}
			}
}
?>