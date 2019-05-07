<?php 


$conn = mysqli_connect("localhost", "root", "", "tracker");

$query = "SELECT * FROM cargo";

$get_cargo = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>
	<h2>Current Orders</h2>

	<table>
		<thead class="tablehead">
				<td>No</td>
				<td>Cargo ID</td>
				<td>Customer Name</td>
				<td>Cargo Description</td>
				<td>Cargo Weight</td>
				<td>Location</td>
				<td>Arrival</td>
		</thead>
<?php 

echo "<br/>";
$counter = 1;
while ($this_cargo = mysqli_fetch_assoc($get_cargo)) {
	$cargo_id = $this_cargo['id'];
	$customer_name = $this_cargo['customer_name'];
	$description = $this_cargo['description'];
	$weight = $this_cargo['weight'];
	$location_id = $this_cargo['location_id'];	


	$query_location = "SELECT * FROM locations WHERE id = '$location_id'";

	$get_location = mysqli_query($conn, $query_location);
	while ($this_location = mysqli_fetch_assoc($get_location)) {
		$name = $this_location['name'];
		$desc = $this_location['description'];
		$eta = $this_location['eta'];
	}


	echo "<tr>
			<td>".$counter."</td>
			<td>".$cargo_id."</td>
			<td>".$customer_name."</td>
			<td>".$description."</td>
			<td>".$weight."</td>
			<td>".$name."</td>
			<td>".$eta."</td>
		</tr>";
		$counter ++;

}
 ?>

	</table>
</body>
</html>
