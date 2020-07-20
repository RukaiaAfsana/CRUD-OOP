<?php

 class User extends DB{
 	public function userRegistration($name,$email,$cell,$uname){

 		$sql="INSERT INTO user(name,email,cell,uname) VALUES('$name','$email','$cell','$uname')";
 		$data=parent::connection()->query($sql);
 		
 		if($data){
 			return "<p class=\"alert alert-success\"> Data Added <button class=\" close \" data-dismiss=\"alert\">&times;</button></p>";
 		}
 	}
 	public function showAllData(){
 		$sql="SELECT * FROM user";
 		$data=parent::connection()->query($sql);
 		return $data;
 	}
 	public function userRemove($id){
 		//echo $id;
 		$sql="DELETE FROM user WHERE id='$id'";
 		$data=parent::connection()->query($sql);
 		if($data){
 			$mess="<p class=\"alert alert-danger\">Succefully Deleted !! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
 			return $mess;
 		}

 	}
 	public function getUser($id){
 		$sql="SELECT * FROM user WHERE id='$id'";
 		$data=parent::connection()->query($sql);
 		return $data;

 		
 	}
 	public function userUpdate($name,$email,$cell,$uname,$id){
 		echo "lalla";
 		$sql="UPDATE user SET name='$name', email='$email', cell='$cell',uname='$uname' WHERE id='$id'";
 		$data=parent::connection()->query($sql);
 		if(isset($data)){
 			$mess="<p class=\"alert alert-danger\">Succefully Edited !! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
 			return $mess;
 		}

 	} 
 	
 }


?>