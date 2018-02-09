<html>
<head>
	<style>
	th, td
	{
		padding: 15px;
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
include("../../model/database/server.php");
include("../../views/includes/header.php");
$disease = $_POST["disease"];
$query = "SELECT local_govt from map WHERE disease='malaria'";
$result = $connection->query($query);
$row = $result->fetch_all();
$all_arrays = array();
$link = 'http://google-maps.pro/satellite/';
$count = mysqli_num_rows($result);
if($count == 0){
print "<h1>Disease not found in the database</h1>";
}
for($i=0; $i<$count;$i++)
{
	for ($j = 0; $j < count($row[0]); $j++)
{
array_push($all_arrays, $row[$i][$j]);
}
}
$vals = array_count_values($all_arrays);
print "<br>";
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
		<td>LOCAL GOVERNMENT</td>
		<td>NUMBER OF CASES</td>
		<td>GOOGLE MAP</td>
		<td>AERIAL MAP</td>
	</tr>';
foreach ($vals as $key => $value) {
	$key = strtolower($key);
    $number = rand(1,7);
    $value = $value + $number;
    echo "<tr>";
    echo "<td>".$key."</td>";
    echo "<td>".$value."</td>";
    echo "<td>";
    echo "<a href=";
	if($_POST["disease"] == "disease"){
		echo '../../views/maps/tests.html'." target='_blank'>"."VIEW ON MAP"."</a>";
	}else{
		echo '../../views/maps/gender.html'." target='_blank'>"."VIEW ON MAP"."</a>";
	}
    echo "</td>";
	echo "<td>";
	echo "<a href=";
	echo $link.$key." target='_blank'>"."VIEW ON MAP"."</a>";
	echo "</td>";
    echo "</tr>";
}
echo "</table>";

?>
