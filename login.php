<?php 

session_start();

$conn = mysqli_connect("localhost", "root", "", "tracker");

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";

	$make_query = mysqli_query($conn, $query);

	if (mysqli_num_rows($make_query) > 0) {
		while ($this_admin = mysqli_fetch_assoc($make_query)) {
			$id = $this_admin['id'];
			$_SESSION['id'] = $id;
			header("location: admindash.php?login=succ");
		}
	} else {
		header("location: loginform.php?error");
	}
}

 ?>