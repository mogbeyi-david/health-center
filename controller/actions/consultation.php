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
include("../../model/database/server.php");
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
		<td>Gender</td>
		<td>Email</td>
		<td>Age</td>
		<td>State</td>
		<td>Local Government</td>
		<td>Prescription</td>
		<td>Medicals</td>
		<td>Labtest</td>
	</tr>';

	for($i=0; $i<$count;$i++){
        $all_arrays[$i] = mysqli_fetch_assoc($result);

        echo '<tr>
		<td>'.$all_arrays[$i]['patient_id'].'</td>
		<td>'.$all_arrays[$i]['firstname'].'</td>
		<td>'.$all_arrays[$i]['lastname'].'</td>
		<td>'.$all_arrays[$i]['gender'].'</td>
		<td>'.$all_arrays[$i]['email'].'</td>
		<td>'.$all_arrays[$i]['age'].'</td>
		<td>'.$all_arrays[$i]['city'].'</td>
		<td>'.$all_arrays[$i]['local_govt'].'</td>
		<td>'."<a href='../../views/hospital-forms/prescription.php'><button>PRESCRIBE</button></a>".'</td>
		<td>'."<button>MEDICAL HISTORY</button>".'</td>
		<td>'."<button>LABTEST</button>".'</td>
	</tr>';

    }
	$count--;

echo "</table>";

?>
