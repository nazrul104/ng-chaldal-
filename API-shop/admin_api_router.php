<?php
header('Access-Control-Allow-Origin: *');
	require("db_connection.php");
	switch ($_REQUEST['f']) {
		case 1:
		  require("API_Admin/config.php");
		  $obj=new Config();
		  $obj->CreateMainCategory();
		break;

		case 2:
		  require("API_Admin/config.php");
		  $obj=new Config();
		 $obj->CreateSubCategory();
		break;

		case 3:
		  require("API_Admin/config.php");
		  $obj=new Config();
		  $obj->saveNewProductInfo();
		break;

		case 4:
		  require("API_Admin/admin_products.php");
		  $obj=new Product_admin();
		  $obj->availableProducts();
		break;

		case 5:
			require("API_Admin/Orders.php");
			$obj=new Orders();
			$obj->CustomerOrderList();
		break;



	default:
		# code...
		break;
}

?>
