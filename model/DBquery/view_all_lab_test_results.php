<html>
<head>
    <style>
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
include("../database/server.php");
$query = "SELECT * FROM labtest";
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("<h1>Total number of tests: ".$count."</h1>");
print "<br>";
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
		<td>S/N</td>
		<td>PATIENT ID</td>
		<td>DISEASE</td>
		<td>DATE</td>
		<td>NURSE</td>
		<td>ANALYSIS</td>
	</tr>';

while($count > 0){
    for($i=0; $i<$count;$i++){
        $all_arrays[$i] = mysqli_fetch_assoc($result);

        echo '<tr>
		<td>'.$all_arrays[$i]['id'].'</td>
		<td>'.$all_arrays[$i]['patient_id'].'</td>
		<td>'.$all_arrays[$i]['disease'].'</td>
		<td>'.$all_arrays[$i]['dates'].'</td>
		<td>'.$all_arrays[$i]['nurse'].'</td>
		<td>'.$all_arrays[$i]['analysis'].'</td>
	</tr>';

    }
    $count--;
}
echo "</table>";

?>
