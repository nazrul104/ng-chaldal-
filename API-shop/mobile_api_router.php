<?php
header('Access-Control-Allow-Origin: *');
	require("db_connection.php");
	switch ($_REQUEST['f']) {
		case 1:
		  require("API_Mobile/api_mobile.php");
		  $obj=new API_MOBILE();
		  $obj->GetAllProducts(); 
		break;

		case 2:
	  	  require("API_Mobile/checkout_process.php");
		  $obj=new CheckOutProcess();
		  $obj->SaveOrder(); 
		break;

	    case 3:
		  require("API_Mobile/users.php");
		  $obj=new Users();
		  $obj->Registration(); 
		break;

		case 4:
		  require("API_Mobile/users.php");
		  $obj=new Users();
		  $obj->LoginAuth(); 
		break;

	default:
		# code...
		break;
}

?>