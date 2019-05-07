<?php 

$conn = mysqli_connect("localhost", "root", "", "tracker");
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "INSERT into admins(username, password) VALUES ('$username', '$password')";
if (mysqli_query($conn, $query)) {
	header('location: loginform.php?reg=yes');
	}

}
 ?>