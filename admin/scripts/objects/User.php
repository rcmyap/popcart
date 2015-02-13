<?php 

class User{
	$username="";
	$password="";
	$accountType="";

	public function setUsername($newName){
		$username=$newName;
	}
	
	public function setPassword($newPassword){
		$password=$newPassword;
	}
	
	public function setAccountType($newAcc){
		$accountType=$newAcc;
	}
	
	public function getUsername(){
		return $username;
	}
	
	public function getPassword(){
		return $password;
	}
	
	public function getAccountType(){
		return $accountType;
	}
}


?>