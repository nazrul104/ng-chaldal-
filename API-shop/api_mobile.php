<?php

		/**
		* by Nazrul
		*/
	
		class API_MOBILE extends db_connection
		{
			private $conn="";
			public function __construct()
			{
				$this->conn = parent::__construct();
			}


			public function GetAllProducts()
			{
				$id = 5;
				try
				{
				   $stmt = $this->conn->prepare('SELECT * FROM main_category order by category_name ASC');
				  $stmt->execute();
				  $result = $stmt->fetchAll();
				 $arr=array();
				  if ( count($result) )
				   { 
				     foreach($result as $row) 
				     { 
				     		$cat = array();
				     		$cat["cid"] = $row["id"];
				      		$cat["category_name"] = $row["category_name"];
				      		$wrp = array();
				      		$stmt2 = $this->conn->prepare('SELECT * FROM sub_category WHERE main_category_id = :main_category_id');
							$stmt2->execute(array('main_category_id' => $row["id"]));
						 	$result2 = $stmt2->fetchAll();
						 	if ($result2)
						 	 {
						 	  	foreach ($result2 as $row2)
						 	  	 {
						 	  		$scat = array();
						 	  		$proArr= array();
						 	  		$scat["scid"] = $row2["id"];
						 	  		$scat["sub_category_name"] = $row2["sub_category_name"];
						 	  			$product_query = $this->conn->prepare('SELECT * FROM products WHERE sub_category_id = :sub_category_id');
										$product_query->execute(array('sub_category_id' => $row2["id"]));
									 	$productlist = $product_query->fetchAll();
									 	if ($productlist) 
									 	{
									 		foreach ($productlist as $myproduct) 
									 		{
									 			$product =array();
									 			$product["product_id"]=$myproduct["id"];
									 			$product["product_title"]=$myproduct["product_title"];
									 			$product["product_summary"]=$myproduct["product_summary"];
									 			$product["product_descripton"]=$myproduct["product_descripton"];
									 			$product["product_size"]=$myproduct["product_size"];
									 			$product["product_color"]=$myproduct["product_color"];
									 			$product["product_price"]=$myproduct["product_price"];

									 			$product["product_weight"]=$myproduct["product_weight"];
									 			$product["product_thumb_image"]=$myproduct["product_thumb_image"];
									 			$product["product_image"]=$myproduct["product_image"];
									 			$product["product_isActive"]=$myproduct["product_isActive"];
									 			$product["product_stock"]=$myproduct["product_stock"];
									 			$product["updated_date"]=$myproduct["updated_date"];

									 			array_push($proArr, $product);
									 		}
									 		$scat["products_list"] = $proArr;
									 	}
						 	  		array_push($wrp, $scat);
						 	  	 }
						 	 }
						 	 $cat["sub_categories"] = $wrp;
						 	array_push($arr, $cat);
				     }   
				    echo json_encode($arr);
				  } else 
				  {
				    echo 0;
				  }

				} catch(PDOException $e) 
				{
				    echo 'ERROR: ' . $e->getMessage();
				}
			}

			public function CategoryList()
			{
				$id = 5;
				try
				{
				   $stmt = $this->conn->prepare('SELECT * FROM main_category order by category_name ASC');
				  $stmt->execute();
				  $result = $stmt->fetchAll();
				 $arr=array();
				  if ( count($result) )
				   { 
				     foreach($result as $row) 
				     { 
				     		$cat = array();
				     		$cat["cid"] = $row["id"];
				      		$cat["category_name"] = $row["category_name"];
				      		$wrp = array();
				      		$stmt2 = $this->conn->prepare('SELECT * FROM sub_category WHERE main_category_id = :main_category_id');
							$stmt2->execute(array('main_category_id' => $row["id"]));
						 	$result2 = $stmt2->fetchAll();
						 	if ($result2)
						 	 {
						 	  	foreach ($result2 as $row2)
						 	  	 {
						 	  		$scat = array();
						 	  		$proArr= array();
						 	  		$scat["scid"] = $row2["id"];
						 	  		$scat["sub_category_name"] = $row2["sub_category_name"];
						 	  		array_push($wrp, $scat);
						 	  	 }
						 	 }
						 	 $cat["sub_categories"] = $wrp;
						 	array_push($arr, $cat);
				     }   
				    echo json_encode($arr);
				  } else 
				  {
				    echo 0;
				  }

				} catch(PDOException $e) 
				{
				    echo 'ERROR: ' . $e->getMessage();
				}
			}

			public function getProductsById()
			{				$id = 5;
				try
				{

						 	  		$arr = array();
						 	  		$proArr= array();
						 	  			$product_query = $this->conn->prepare('SELECT * FROM products WHERE main_category_id = :main_category_id');
										$product_query->execute(array('main_category_id' => $_REQUEST["main_category_id"]));
									 	$productlist = $product_query->fetchAll();
									 	if ($productlist) 
									 	{
									 		foreach ($productlist as $myproduct) 
									 		{
									 			$product =array();
									 			$product["product_id"]=$myproduct["id"];
									 			$product["product_title"]=$myproduct["product_title"];
									 			$product["product_summary"]=$myproduct["product_summary"];
									 			$product["product_descripton"]=$myproduct["product_descripton"];
									 			$product["product_size"]=$myproduct["product_size"];
									 			$product["product_color"]=$myproduct["product_color"];
									 			$product["product_price"]=$myproduct["product_price"];

									 			$product["product_weight"]=$myproduct["product_weight"];
									 			$product["product_thumb_image"]=$myproduct["product_thumb_image"];
									 			$product["product_image"]=$myproduct["product_image"];
									 			$product["product_isActive"]=$myproduct["product_isActive"];
									 			$product["product_stock"]=$myproduct["product_stock"];
									 			$product["updated_date"]=$myproduct["updated_date"];

									 			array_push($proArr, $product);
									 		}
									 		$arr["products_list"] = $proArr;
									 	}

				    echo json_encode($arr);
				  } 
				 catch(PDOException $e) 
				{
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