<?php 

session_start();
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$conn = mysqli_connect("localhost", "root", "", "tracker");
	$query = "SELECT * FROM admins WHERE id = '$id'";

	$make_query = mysqli_query($conn, $query);
	while($this_admin = mysqli_fetch_assoc($make_query)) {
		$username = $this_admin['username'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<div id="headbar"><h2>Welcome <?php echo $username; ?></h2></div>

<div id="sidebar">
	<ul>
		<li><a href="admindash.php">Refresh</a></li>
		<li><a href="admindash.php?addnew">Add new Order</a></li>
		<li><a href="admindash.php?view">Views Orders</a></li>
		<li><a href="admindash.php?update">Update order location</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>

<div id="mainbar">
	
	<?php 

		if (isset($_GET['addnew'])) {
			include('neworderform.php');
		} else if (isset($_GET['update'])) {
			include('updateform.php');
		} else if (isset($_GET['view'])) {
			include('vieworders.php');
		} 
	 ?>

</div>
</body>
</html>

<?php
}
?>