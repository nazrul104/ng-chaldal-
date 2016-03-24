<?php
class db_connection{
	private $conn="";
	private $username,$password;
	public function __construct()
	{
	$this->username="root";
				$this->password="";

				try {
					    $this->conn = new PDO('mysql:host=localhost;dbname=online_shop', $this->username, $this->password);
					    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					    return $this->conn;
					} catch(PDOException $e) {
					    echo 'ERROR: ' . $e->getMessage();
					}
				}
}
?>