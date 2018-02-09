<html>
<head>
	<style>
	th, td
	{
		padding: 8px;
		text-align: left;
		border: 1px solid black;
	}

tr:hover
{
	background-color:#f5f5f5;
}
	</style>
</head>
</html>
<?php
include("../database/server.php");
$query = "SELECT * FROM patients";
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("<h1>Total number of patients: ".$count."</h1>");
print "<br>";
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
		<td>Patient ID</td>
		<td>Firstname</td>
		<td>Lastname</td>
		<td>Address</td>
		<td>Gender</td>
		<td>Email</td>
		<td>Age</td>
		<td>Parent Name</td>
		<td>Parent Number</td>
		<td>Marital Status</td>
		<td>State</td>
		<td>Local Government</td>
	</tr>';

	for($i=0; $i<$count;$i++){
		$all_arrays[$i] = mysqli_fetch_assoc($result);

echo '<tr>
		<td>'.$all_arrays[$i]['patient_id'].'</td>
		<td>'.$all_arrays[$i]['firstname'].'</td>
		<td>'.$all_arrays[$i]['lastname'].'</td>
		<td>'.$all_arrays[$i]['address'].'</td>
		<td>'.$all_arrays[$i]['gender'].'</td>
		<td>'.$all_arrays[$i]['email'].'</td>
		<td>'.$all_arrays[$i]['age'].'</td>
		<td>'.$all_arrays[$i]['parent_name'].'</td>
		<td>'.$all_arrays[$i]['parent_number'].'</td>
		<td>'.$all_arrays[$i]['marital_status'].'</td>
		<td>'.$all_arrays[$i]['city'].'</td>
		<td>'.$all_arrays[$i]['local_govt'].'</td>
	</tr>';

	}
	$count--;

echo "</table>";

?>
