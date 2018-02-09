<!doctype html>
<html>
<head>
    <title>Enter Id</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
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
<body>
<div class="login-page">
    <div class="form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <input type="text" name="patient_id" placeholder="ENTER THE PATIENT ID HERE" id="delete_a_patient_action" required><br><br>
                <input type="submit" id="submit" name="delete_patient" value="DELETE PATIENT">
            </form>
    </div>
</div>
<?php
include("../../model/database/server.php");
include("../../controller/actions/delete_a_patient.php");
$query = "SELECT * FROM patients";
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("<h1>Total number of Patients: ".$count."</h1>");
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
        <td>ID</td>
		<td>FIRSTNAME</td>
		<td>LASTNAME</td>
		<td>ADDRESS</td>
		<td>GENDER</td>
		<td>EMAIL</td>
		<td>AGE</td>
		<td>PARENT NAME</td>
		<td>PARENT NUMBER</td>
		<td>MARITAL STATUS</td>
		<td>STATE</td>
		<td>LOCAL GOVERNMENT</td>
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
</body>
</html>

