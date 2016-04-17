<?php
header('Access-Control-Allow-Origin: *');
	require("db_connection.php");
	switch ($_REQUEST['f']) {
/*		case 1:
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
		break;*/

		case 3:
		  require("API_web/product.php");
		  $obj=new Product();
		  $obj->ProductDetails(); 
		break;

		case 4:
		  require("API_Web/mycategory.php");
		  $obj=new MyCategory();
		  $obj->GetMainCategoryById(); 
		break;


		case 5:
		  require("API_Web/mycategory.php");
		  $obj=new MyCategory();
		  $obj->CategoryList(); 
		break;

		case 6:
		  require("API_web/product.php");
		  $obj=new Product();
		  $obj->getProductsById(); 
		break;

		case 7:
		  require("API_web/product.php");
		  $obj=new Product();
		  $obj->getProductsByBothId(); 
		break;


		case 8:
		  require("API_web/users.php");
		  $obj=new Users();
		  $obj->Registration(); 
		break;

		case 9:
		  require("API_web/users.php");
		  $obj=new Users();
		  $obj->LoginAuth(); 
		break;

		case 10:
		  require("API_web/checkout_process.php");
		  $obj=new CheckOutProcess();
		  $obj->SaveOrder(); 
		break;

	default:
		# code...
		break;
}

?>