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
<<<<<<< HEAD

				case 7:
		  require("api_mobile.php");
		  $obj=new API_MOBILE();
		  $obj->availableProducts(); 
		break;


				case 8:
		  require("users.php");
		  $obj=new Users();
		  $obj->Registration(); 
		break;

		case 9:
		  require("users.php");
		  $obj=new Users();
		  $obj->LoginAuth(); 
		break;

=======
>>>>>>> 794553664befbb90f7ac50e7806f7e7b99af76ea
	
	default:
		# code...
		break;
}

?>