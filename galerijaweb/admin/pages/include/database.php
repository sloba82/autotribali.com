<?php

require_once ("config.php");

class Database {
	
	public $conn;
	
	public function __construct(){
		
		$this->db_open_conn();
		
	}
	
	public function db_open_conn(){
			$this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		
/* 		if ($this->conn->connect_erron) {
			die ("baza je pukla ko lubenica".mysqli_error());
		} */
	}
	
	
	public function query($sql){
	
	$rez = mysqli_query($this->conn,$sql);
	return $rez;
	
	}
	
	private function confirm_query($rez) {
		if(!$rez){
			die("zahtev prema bazi puko");
		}
		
	}
	
	public function escape_sting($string) {
		$esc_string = mysqli_real_escape_string($this->conn,$string);
		return $esc_string;
	}
	
	
	
	
	
}


$dataconn = new Database();



				










