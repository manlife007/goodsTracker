<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<center><h2>Admin Login</h2></center>
	<form method="post" action="login.php">
		<label>Username</label>
		<input type="text" name="username">
		<label>Password</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>