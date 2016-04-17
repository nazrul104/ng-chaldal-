<?php

		/**
		* by Nazrul
		*/

		class Product extends db_connection
		{
			private $conn="";
			public function __construct()
			{
				$this->conn = parent::__construct();
			}


			public function availableProducts()
			{
				try
				{

						 	  		$arr = array();
						 	  		$proArr= array();
						 	  			$product_query = $this->conn->prepare('SELECT * FROM products WHERE product_isActive = :product_isActive ORDER BY id DESC');
										$product_query->execute(array('product_isActive' => 1));
									 	$productlist = $product_query->fetchAll();
									 	if ($productlist)
									 	{
									 		foreach ($productlist as $myproduct)
									 		{
									 			$product =array();
									 			$product["product_id"]=$myproduct["id"];
									 			$product["product_title"]=$myproduct["product_title"];
									 			//$product["product_summary"]=$myproduct["product_summary"];
									 			//$product["product_descripton"]=$myproduct["product_descripton"];
									 			$product["product_size"]=$myproduct["product_size"];
									 			$product["product_color"]=$myproduct["product_color"];
									 			$product["product_price"]=$myproduct["product_price"];

									 			$product["product_weight"]=$myproduct["product_weight"];
									 			$product["product_thumb_image"]=$myproduct["product_thumb_image"];
									 			$product["product_image"]=$myproduct["product_image"];
									 			//$product["product_isActive"]=$myproduct["product_isActive"];
									 			//$product["product_stock"]=$myproduct["product_stock"];
									 			//$product["updated_date"]=$myproduct["updated_date"];

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

			public function getProductsById()
			{

				if ($_REQUEST["main_category_id"]=="all")
				 {
					self::availableProducts();
				}
				else
				{
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
									 			//$product["product_summary"]=$myproduct["product_summary"];
									 			//$product["product_descripton"]=$myproduct["product_descripton"];
									 			$product["product_size"]=$myproduct["product_size"];
									 			$product["product_color"]=$myproduct["product_color"];
									 			$product["product_price"]=$myproduct["product_price"];

									 			$product["product_weight"]=$myproduct["product_weight"];
									 			$product["product_thumb_image"]=$myproduct["product_thumb_image"];
									 			$product["product_image"]=$myproduct["product_image"];
									 			//$product["product_isActive"]=$myproduct["product_isActive"];
									 			//$product["product_stock"]=$myproduct["product_stock"];
									 			//$product["updated_date"]=$myproduct["updated_date"];

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
			}

			public function Delete()
			{
			  $id=1;
			  $stmt = $this->conn->prepare('DELETE FROM main_category WHERE main_category_id = :id');
			  $stmt->bindParam(':id', $id);
			  $stmt->execute();
			  echo $stmt->rowCount();
			}


			public function ProductDetails()
			{
				try
				{

						 	  		$arr = array();
						 	  		$proArr= array();
						 	  			$product_query = $this->conn->prepare('SELECT * FROM products WHERE id = :id');
										$product_query->execute(array('id' => $_REQUEST["pid"]));
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
									 		$arr["products_details"] = $proArr;
									 	}

				    echo json_encode($arr);
				  }
				 catch(PDOException $e)
				{
				    echo 'ERROR: ' . $e->getMessage();
				}
			}


			public function getProductsByBothId()
			{


				try
				{

						 	  		$arr = array();
						 	  		$proArr= array();
						 	  			$product_query = $this->conn->prepare('SELECT * FROM products WHERE main_category_id = :main_category_id AND sub_category_id = :sub_category_id');
										$product_query->execute(array('main_category_id' => $_REQUEST["main_category_id"],'sub_category_id' => $_REQUEST['sub_category_id']));
									 	$productlist = $product_query->fetchAll();
									 	if ($productlist)
									 	{
									 		foreach ($productlist as $myproduct)
									 		{
									 			$product =array();
									 			$product["product_id"]=$myproduct["id"];
									 			$product["product_title"]=$myproduct["product_title"];
									 			//$product["product_summary"]=$myproduct["product_summary"];
									 			//$product["product_descripton"]=$myproduct["product_descripton"];
									 			$product["product_size"]=$myproduct["product_size"];
									 			$product["product_color"]=$myproduct["product_color"];
									 			$product["product_price"]=$myproduct["product_price"];

									 			$product["product_weight"]=$myproduct["product_weight"];
									 			$product["product_thumb_image"]=$myproduct["product_thumb_image"];
									 			$product["product_image"]=$myproduct["product_image"];
									 			//$product["product_isActive"]=$myproduct["product_isActive"];
									 			//$product["product_stock"]=$myproduct["product_stock"];
									 			//$product["updated_date"]=$myproduct["updated_date"];

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
		}


?>
