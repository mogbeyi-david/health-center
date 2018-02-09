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
$query = "SELECT * FROM staff";
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("<h1>Total number of Staff: ".$count."</h1>");
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
		<td>TITLE</td>
		<td>FIRSTNAME</td>
		<td>LASTNAME</td>
		<td>SUFFIX</td>
		<td>EMAIL</td>
		<td>CONTACT</td>
		<td>GENDER</td>
	</tr>';

	for($i=0; $i<$count;$i++){
		$all_arrays[$i] = mysqli_fetch_assoc($result);

echo '<tr>
		<td>'.$all_arrays[$i]['title'].'</td>
		<td>'.$all_arrays[$i]['firstname'].'</td>
		<td>'.$all_arrays[$i]['lastname'].'</td>
		<td>'.$all_arrays[$i]['suffix'].'</td>
		<td>'.$all_arrays[$i]['email'].'</td>
		<td>'.$all_arrays[$i]['contact'].'</td>
		<td>'.$all_arrays[$i]['gender'].'</td>
	</tr>';

	}
	$count--;
echo "</table>";
?>
