<?php session_start(); ?>
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
			border: 1px solid black;
		}

		tr:hover
		{
			background-color:#f5f5f5;
		}
	</style>
</head>
<body>
<div>
	<?php
	include("../../model/database/server.php");
	if(isset($_POST['patient_id'])){
		$patient_id = $_POST["patient_id"];
	}else{
		print("<h2 style='color:#4169e1;'>No ID Selected" . "<h2>");
	}
	$query = "SELECT * FROM disease WHERE patient_id='$patient_id'";
	$result = mysqli_query($connection , $query);
	$all_arrays = array();
	$count = mysqli_num_rows($result);
	if($count == 0){
		$_SESSION["id_does_not_exist"] = "<h2 style='color:#4169e1'>This ID Does Not Exist</h2>";
		header("location:../../views/profiles/doctor_profile.php");
	}else{
		print("<h2 style='color:#4169e1;'>Total number of Cases: ".$count . "<h2>");
	}
	print "<br>";
	echo "<table>";
	echo '<tr>
<td>ID</td>
<td>PATIENT ID</td>
<td>DATESTAMP</td>
<td>TIMESTAMP</td>
<td>DIAGNOSIS</td>
<td>COMMENTS</td>
<td>ADMISSION STATUS</td>
<td>ADMISSION DATE</td>
<td>DISCHARGE STATUS</td>
<td>DISCHARGE DATE</td>
<td>DRUG PRESCRIPTION</td>
<td>DRUG DOSAGE</td>
<td>DRUG DURATION</td>
<td>INJECTION PRESCRIPTION</td>
<td>INJECTION DOSAGE</td>
<td>INJECTION DURATION</td>
<td>DRIP PRESCRIPTION</td>
<td>DRIP DOSAGE</td>
<td>DRIP DURATION</td>
</tr>';


	for($i=0; $i<$count;$i++){
		$all_arrays[$i] = mysqli_fetch_assoc($result);
		echo '<tr>
    		<td>'.$all_arrays[$i]['id'].'</td>
    		<td>'.$all_arrays[$i]['patient_id'].'</td>
    		<td>'.$all_arrays[$i]['datestamp'].'</td>
    		<td>'.$all_arrays[$i]['timestamps'].'</td>
    		<td>'.$all_arrays[$i]['diagnosis'].'</td>
    		<td>'.$all_arrays[$i]['comments'].'</td>
    		<td>'.$all_arrays[$i]['admission_status'].'</td>
    		<td>'.$all_arrays[$i]['admission_date'].'</td>
    		<td>'.$all_arrays[$i]['discharge_status'].'</td>
    		<td>'.$all_arrays[$i]['discharge_date'].'</td>
    		<td>'.$all_arrays[$i]['drug_prescription'].'</td>
    		<td>'.$all_arrays[$i]['drug_dosage'].'</td>
    		<td>'.$all_arrays[$i]['drug_duration'].'</td>
    		<td>'.$all_arrays[$i]['injection_prescription'].'</td>
    		<td>'.$all_arrays[$i]['injection_dosage'].'</td>
    		<td>'.$all_arrays[$i]['injection_duration'].'</td>
    		<td>'.$all_arrays[$i]['drip_prescription'].'</td>
    		<td>'.$all_arrays[$i]['drip_dosage'].'</td>
    		<td>'.$all_arrays[$i]['drip_duration'].'</td>
    	</tr>';

	}
	$count--;

	echo "</table>";
	?>
	<?php print "<br>";print "<br>"?>

	<a href ="../../views/profiles/doctor_profile.php">CLICK HERE TO GO BACK TO PROFILE PAGE</a>
</body>
</html>