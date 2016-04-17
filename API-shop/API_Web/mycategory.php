<?php
/**
* 
*/
class MyCategory extends db_connection
{
	
			private $conn="";
			public function __construct()
			{
				$this->conn = parent::__construct();
			}
	
			public function CategoryList()
			{

				try
				{
				   $stmt = $this->conn->prepare('SELECT * FROM main_category order by id ASC');
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

			public function GetMainCategoryById()
			{
			
				try
				{
				  $stmt = $this->conn->prepare('SELECT * FROM sub_category WHERE main_category_id = :main_category_id');
				  $stmt->execute(array('main_category_id' => $_REQUEST['main_category_id']));
				  $result = $stmt->fetchAll();
				 
				  if ( count($result) ) { 
				  	$arr = array();
				    foreach($result as $row) {
				    	$scat = array();
				    	$scat["sub_category_id"] = $row["id"];
				    	$scat["main_category_id"] = $row["main_category_id"];
				    	$scat["sub_category_name"] = $row["sub_category_name"];
				   
				      array_push($arr, $scat);
				    }   
				       echo json_encode($arr);
				  } else {
				    echo "No rows returned.";
				  }
				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
			}


}
?>