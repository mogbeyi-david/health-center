<html>
<head>
	<style>
	table{
		border-collapse: collapse;
		 width:100%;
	}
	th, td
	{
		padding: 8px;
		text-align: left;
		/*border-bottom: 1px solid #ddd;*/
	}

tr:hover
{
	background-color:#f5f5f5;
}
	</style>
</head>
</html>
<?php
include("server.php");
include("database_fns.php");

$query = "SELECT * FROM DISEASE WHERE date_discharged='Discharged'";
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("The Total number of patients is: ".$count);
print "<br>";
echo "<table>";
echo '<tr>
<td>ID</td>
<td>PATIENT ID</td>
<td>DISEASE</td>
<td>DATE</td>
<td>DATE ADMITTED</td>
<td>DATE DISCHARGED</td>
<td>DRUGS</td>
<td>DOSAGE</td>
<td>DURATION</td>
</tr>';

while($count > 0){
	for($i=0; $i<$count;$i++){
		$all_arrays[$i] = mysqli_fetch_assoc($result);
    echo '<tr>
    		<td>'.$all_arrays[$i]['id'].'</td>
    		<td>'.$all_arrays[$i]['patient_id'].'</td>
    		<td>'.$all_arrays[$i]['disease'].'</td>
    		<td>'.$all_arrays[$i]['dates'].'</td>
    		<td>'.$all_arrays[$i]['date_admitted'].'</td>
    		<td>'.$all_arrays[$i]['date_discharged'].'</td>
    		<td>'.$all_arrays[$i]['drugs'].'</td>
    		<td>'.$all_arrays[$i]['dosage'].'</td>
    		<td>'.$all_arrays[$i]['duration'].'</td>
    	</tr>';

    	}
    	$count--;
    }
    echo "</table>";
?>
