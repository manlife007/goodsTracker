<?php 
session_start();
	$conn = mysqli_connect("localhost", "root", "", "tracker");
	if (isset($_POST['submit'])) {
		$name = $_POST['customer_name'];
		$description = $_POST['description'];
		$weight = $_POST['weight'];

		$query = "INSERT INTO cargo(customer_name, description, weight) VALUES ('$name', '$description', '$weight')";

		 if (mysqli_query($conn, $query)) {
		 	header("location: admindash.php?order=added");
		 }
	}

 ?>