<?php


  //Database Management
	abstract class DB{
		private $host='localhost';
		private $user='root';
		private $password='';
		private $db="oop_crud";
		private $conn;

        //this is for database connection 
		protected function connection(){
			$this->conn= new mysqli($this->host, $this->user, $this->password,$this->db);
			return $this->conn;
		}

		

		
		

	 }


?>