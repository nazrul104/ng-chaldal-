<?php
class Users extends db_connection
{
			private $conn="";
			public function __construct()
			{
				$this->conn = parent::__construct();
			}

			public function Registration()
			{
				$postdata = file_get_contents("php://input");
			    $request = json_decode($postdata);
			    @$email = $request->email;
			    @$pass = $request->password;
			    
				try
				{
					$created_date = date("Y-m-d H:i:s");
					$stmt = $this->conn->prepare('INSERT INTO users(name,email,mobile_no,password,delivery_address,account_created_date)VALUES(:name,:email,:mobile_no,:password,:delivery_address,:account_created_date)');
					$stmt->execute(array(
							':name' => $_POST['name'],
							':email' => $_POST['email'],
							':mobile_no' => $_POST['mobile_no'],
							':password' => $_POST['password'],
							':delivery_address' => $_POST['delivery_address'],
							':account_created_date'=> $created_date));

					$output = array("status"=>"success","msg"=>"Account has been created successfully");
					echo json_encode($output);
				} catch(PDOException $e) {
					echo 'Error: ' . $e->getMessage();
				}
			}

			public function LoginAuth()
			{

				$postdata = file_get_contents("php://input");
			    $request = json_decode($postdata);
			    @$email = $request->email;
			    @$pass = $request->password;

				try
				{
				  $stmt = $this->conn->prepare('SELECT * FROM users WHERE email = :email AND password = :password limit 1');
				  $stmt->execute(array('email' => $email,'password'=> $pass));
				  $result = $stmt->fetchAll();
			   	 if (count($result) > 0)
				  {
				  	foreach ($result as $data) {
				  	 	$output = array("status"=>"success","msg"=>"logged in","user_id"=>$data['id']);
						echo json_encode($output);
				  	}
				 
				  }
				  else
				  {
				  	$output = array("status"=>"failed","msg"=>"Invalid email or password",);
					echo json_encode($output);
				  }
				} catch(PDOException $e)
				 {
				    echo 'ERROR: ' . $e->getMessage();
				}
			}
}
?>