<?php

		/**
		* by Nazrul
		*/
	
		class Config extends db_connection
		{
			private $conn="";
			public function __construct()
			{
				$this->conn = parent::__construct();
			}

			public function CreateMainCategory()
			{
				try
				 {				 
				  $stmt = $this->conn->prepare('INSERT INTO main_category(category_name,created_date)VALUES(:category_name,:created_date)');
				  $stmt->execute(array(
						  ':category_name' => $_POST['ctg_name'],
						  ':created_date'=> strtotime(date('d-m-y')))
				  );
				 
				  # Affected Rows?
					 $output = array("status"=>"success","msg"=>"Category has been created successfully");
					 echo json_encode($output);
				} catch(PDOException $e) {
				  echo 'Error: ' . $e->getMessage();
				}
			}
			public function CreateSubCategory()
			{
				try
				{
					$stmt = $this->conn->prepare('INSERT INTO sub_category(main_category_id,sub_category_name,created_date)VALUES(:main_category_id,:sub_category_name,:created_date)');
					$stmt->execute(array(
							':main_category_id' => $_POST['ctg_id'],
							':sub_category_name' => $_POST['sub_ctg_name'],
							':created_date'=> strtotime(date('d-m-y')))
					);

					# Affected Rows?
					//echo $stmt->rowCount(); // 1
					$output = array("status"=>"success","msg"=>"sub category has been created successfully");
					echo json_encode($output);
				} catch(PDOException $e) {
					echo 'Error: ' . $e->getMessage();
				}
			}


			public function saveNewProductInfo()
			{
				$target_dir = "img/";
				$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
				try
				{
					$stmt = $this->conn->prepare('INSERT INTO products(sub_category_id,product_title,product_summary,product_descripton,product_size,product_color,product_price,product_weight,product_image,product_isActive,product_stock,updated_date,created_date)VALUES(:sub_category_id,:product_title,:product_summary,:product_descripton,:product_size,:product_color,:product_price,:product_weight,:product_image,:product_isActive,:product_stock,:updated_date,:created_date)');
					$stmt->execute(array(
							':sub_category_id' => $_POST['sub_category_id'],
							':product_title' => $_POST['product_title'],
							':product_summary' => $_POST['product_summary'],
							':product_descripton' => $_POST['product_descripton'],
							':product_size' => $_POST['product_size'],
							':product_color' => $_POST['product_color'],
							':product_price' => $_POST['product_price'],
							':product_weight' => $_POST['product_weight'],
							':product_image' => $_FILES["product_image"]["name"],
							':product_isActive' => $_POST['product_isActive'],
							':product_stock' => $_POST['product_stock'],
							':updated_date' => strtotime(date('d-m-y')),
							':created_date' => strtotime(date('d-m-y')))
					);

					if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) 
					{
				      //  echo "The file ". basename( $_FILES["product_image"]["name"]). " has been uploaded.";
				    } else 
				    {
				     //   echo "Sorry, there was an error uploading your file.";
				    }
					$output = array("status"=>"success","msg"=>"sub category has been created successfully");
					echo json_encode($output);
				} catch(PDOException $e) {
					echo 'Error: ' . $e->getMessage();
				}
			}

			public function GetMainCategory()
			{
				$id = 5;
				try
				{
				  $stmt = $this->conn->prepare('SELECT * FROM main_category');
				  $stmt->execute();
				  $result = $stmt->fetchAll();
				 $arr=array();
				  if ( count($result) )
				   { 
				     foreach($result as $row) 
				     { 
				      	$arr[]=$row;
				     }   
				      echo json_encode($arr);
				  } else 
				  {
				    echo 0;
				  }

				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
			}
			public function Delete()
			{	 
			  $id=1;
			  $stmt = $this->conn->prepare('DELETE FROM main_category WHERE main_category_id = :id');
			  $stmt->bindParam(':id', $id); 
			  $stmt->execute();
			  echo $stmt->rowCount();
			}
			public function GetMainCategoryById()
			{
				$id = 5;
				try
				{
				  $stmt = $this->conn->prepare('SELECT * FROM main_category WHERE id = :id');
				  $stmt->execute(array('id' => $id));
				  $result = $stmt->fetchAll();
				 
				  if ( count($result) ) { 
				    foreach($result as $row) {
				      print_r($row);
				    }   
				  } else {
				    echo "No rows returned.";
				  }
				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
			}

		}


?>