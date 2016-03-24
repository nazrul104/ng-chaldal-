<?php
require("db_connection.php");
class Common extends db_connection
{
	private $conn="";
	public function __construct()
	{
		$this->conn = parent::__construct();
	}

	public function ListOfCategory()
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
				   	$html ="";
				     foreach($result as $row) 
				     { 
				      $html.="<option value='".$row["id"]."'>".$row["category_name"]."</option>";
				     }   
				     echo $html;
				  } else 
				  {
				    echo 0;
				  }

				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
	}

	public function ListOfSubCategory()
	{
		$id = 5;
				try
				{
				  $stmt = $this->conn->prepare('SELECT * FROM sub_category');
				  $stmt->execute();
				  $result = $stmt->fetchAll();
				 $arr=array();
				  if ( count($result) )
				   { 
				   	$html ="";
				     foreach($result as $row) 
				     { 
				      $html.="<option value='".$row["id"]."'>".$row["sub_category_name"]."</option>";
				     }   
				     echo $html;
				  } else 
				  {
				    echo 0;
				  }

				} catch(PDOException $e) {
				    echo 'ERROR: ' . $e->getMessage();
				}
	}
}

?>