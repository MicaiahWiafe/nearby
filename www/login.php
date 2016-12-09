<?php			
	$id=$_REQUEST['email'];
	$password=$_REQUEST['password'];


	include_once("person.php");
	//create new object of persons
	$obj=new person();
	$r=$obj->login($id,$password);
	$result=$obj->fetch();
	//call the object's person method and check for error
	if($result["username"]!=""){
		//echo "Welcome {$result["username"]}";
		session_start();
		$_SESSION["username"]=$result["username"];
		header("Location:index.html");
	}
	else{
		echo "Incorrect username or password";
	}

			
?>