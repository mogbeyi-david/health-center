<?php
include("../../model/database/server.php");
session_start();

function confirm_id($connection , $patient_id){
	$query = "SELECT * FROM patients WHERE patient_id = '$patient_id'";
	$result = mysqli_query($connection , $query);
	$result_set = mysqli_fetch_assoc($result);
	$number = count($result_set);
	if($number > 0){
		$query = "INSERT INTO patient_nurse(patient_id,height,weight,blood_pressure,temperature) VALUES('$patient_id','$height','$weight','$bp','$temperature')";
		$result = mysqli_query($connection , $query);
		if ($result) {
			$_SESSION["message_add_patient_details"] = "<h2 style='color:#4169e1'>Data Has Been Successfully Added</h2>";
			header("location:../../views/profiles/nurse_profile.php");
		}else {
			echo "Error: " . $query . "<br>" . $connection->error;
			print "<br>";
			print "<h1>OOPS!! A problem seems to have occured, please contact the IT department</h1>";
		}
	}else{
		$_SESSION["message_add_patient_details"] = "<h2 style='color:#4169e1'>This ID Does Not Exist</h2>";
		header("location:../../views/profiles/nurse_profile.php");
	}
}



if(isset($_POST["Submit"])){
	$patient_id = $_POST["patient_id"];
	$height = $_POST["height"];
	$weight = $_POST["weight"];
	$bp1 = $_POST["bp1"];
	$bp2 = $_POST["bp2"];
	$temperature = $_POST["temperature"];
	$bp = $bp1."/".$bp2;
	confirm_id($connection , $patient_id);
}

?>
