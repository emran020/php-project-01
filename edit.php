<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Firstname:</label><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname">
		<label>Lastname:</label><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
		<?php
		// Accessing an individual cookie value
		//echo $_COOKIE["username"];
		?>

		<?php
		// Verifying whether a cookie is set or not
		if(isset($_COOKIE["username"])){
			echo "Hi " . $_COOKIE["username"];
		} else{
			echo "Welcome Guest!";
		}
		?>		
	</form>
</body>
</html>