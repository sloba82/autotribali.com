<?php



//include("config.php");
			
class User {
 function __construct(){
		$this->find_all_users();

	
	
	public function find_all_users(){
	global $dataconn;	
	$rez = $dataconn->query("SELECT * FROM users");
	return $rez;
		
		
	}
	
}


