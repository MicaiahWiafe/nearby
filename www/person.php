<?php
/**
*
*/
include_once("adb.php");
/**
*Nurse  class
*/
class person extends adb{
/**
*Default constructor
*/
	function person(){
	}
	
	/**
	*gets user records based on the filter
	*@param string mixed condition to filter. If  false, then filter will not be applied
	*@return boolean true if successful, else false
	*/
	function login($id,$password){
		$strQuery="SELECT username from admin where adminid='$id' and password='$password'";
		return $this->query($strQuery);
	}

	function signup($firstname,$lastname,$email,$password,$phone){
		$username = $firstname.$lastname;
		$strQuery="INSERT INTO `user`(`first_name`, `surname`, `email`, `password`, `phone`, `username`) VALUES ($firstname, $lastname, $email, $password, $phone,$username)";
		return $this->query($strQuery);
	}
}
?>