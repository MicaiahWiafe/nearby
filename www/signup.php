<?php
	$first = $_REQUEST['firstname'];
	$last = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$phone = $_REQUEST['phone'];
	$username = $first.$last;

	$con = mysqli_connect('localhost','root','','nearby');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con,"nearby");
	$sql="INSERT INTO `user`(`first_name`, `surname`, `email`, `password`, `phone`, `username`) VALUES (".$first.", ".$last.", ".$email.", ".$password.", ".$phone.", ".$username.")";
	$result = mysqli_query($con,$sql);


	 while($row = mysqli_fetch_array($result)) {
	     echo "alert('success');";
	 }

	mysqli_close($con);

?>