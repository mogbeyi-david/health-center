<html>
<head>
	<style>
th, td
	{
        padding: 8px;
		text-align: left;
		padding: 50px 50px 50px 50px;
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
include("../../views/includes/header.php");
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
		<td>Email</td>
		<td>Age</td>
		<td>Parent Name</td>
		<td>City</td>
	</tr>';

    for($i=0; $i<$count;$i++){
        $all_arrays[$i] = mysqli_fetch_assoc($result);
        $save_id = $all_arrays[$i]['patient_id'];
        echo '<tr>
		<td>'.$all_arrays[$i]['patient_id'].'</td>
		<td>'.$all_arrays[$i]['firstname'].'</td>
		<td>'.$all_arrays[$i]['lastname'].'</td>
		<td>'.$all_arrays[$i]['address'].'</td>
		<td>'.$all_arrays[$i]['email'].'</td>
		<td>'.$all_arrays[$i]['age'].'</td>
		<td>'.$all_arrays[$i]['parent_name'].'</td>
		<td>'.$all_arrays[$i]['city'].'</td>
		<td><span>';
        echo "<a href='update.php?id={$save_id}'><input type='submit' name='submit' value='UPDATE'></a>";
        echo "</span></td>
	</tr>";

    }
echo "</table>";
?>