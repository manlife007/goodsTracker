<?php 

session_start();
$conn = mysqli_connect("localhost", "root", "", "tracker");

if (isset($_POST['submit'])) {
	$cargo_id = $_POST['id'];
	$location = $_POST['location'];

	$query = "SELECT * FROM locations WHERE name = '$location'";

	$make_query = mysqli_query($conn, $query);
	while ($this_location = mysqli_fetch_assoc($make_query)) {
		$location_id = $this_location['id'];
		$query_cargo = "UPDATE cargo SET location_id ='$location_id' WHERE id = '$cargo_id'";
		if (mysqli_query($conn, $query_cargo)) {
			header('location: admindash.php?update=yes');
		}
	}
}

 ?>