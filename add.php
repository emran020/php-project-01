<?php
	include('conn.php');
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
		
	mysqli_query($conn,"insert into `user` (firstname,lastname) values ('$firstname','$lastname')");
	
	// Setting a cookie
	setcookie("username", "$lastname", time()+5);

	header('location:index.php');
	
?>