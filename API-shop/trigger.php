<?php
header('Access-Control-Allow-Origin: *');
	require("db_connection.php");
	switch ($_REQUEST['f']) {
		case 1:
		  require("config.php");
		  $obj=new Config();
		  $obj->CreateMainCategory(); 
		break;

		case 2:
		  require("config.php");
		  $obj=new Config();
		 $obj->CreateSubCategory(); 
		break;

		case 3:
		  require("config.php");
		  $obj=new Config();
		  $obj->saveNewProductInfo(); 
		break;

		case 4:
		  require("api_mobile.php");
		  $obj=new API_MOBILE();
		  $obj->GetAllProducts(); 
		break;

		case 5:
		  require("api_mobile.php");
		  $obj=new API_MOBILE();
		  $obj->CategoryList(); 
		break;

		case 6:
		  require("api_mobile.php");
		  $obj=new API_MOBILE();
		  $obj->getProductsById(); 
		break;
	
	default:
		# code...
		break;
}

?>