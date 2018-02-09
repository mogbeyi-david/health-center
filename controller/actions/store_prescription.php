<?php
session_start();
include("../../model/database/server.php");
function store_prescription($connection,$patient_id,$datestamp,$timestamp,$diagnosis,$comments
    ,$admission_status,$admission_date,$discharge_status,$discharge_date,
                            $drug_prescription,$drug_dosage,$drug_duration,
                            $injection_prescription,$injection_dosage,$injection_duration,
                            $drip_prescription,$drip_dosage,$drip_duration){
    include("../../model/database/server.php");
    $query = "INSERT INTO disease(patient_id,datestamp,timestamps,diagnosis,comments
        ,admission_status,admission_date,discharge_status,discharge_date,
        drug_prescription,drug_dosage,drug_duration,
        injection_prescription,injection_dosage,injection_duration,
        drip_prescription,drip_dosage,drip_duration) VALUES('$patient_id','$datestamp','$timestamp','$diagnosis','$comments'
        ,'$admission_status','$admission_date','$discharge_status','$discharge_date',
        '$drug_prescription','$drug_dosage','$drug_duration',
        '$injection_prescription','$injection_dosage','$injection_duration',
        '$drip_prescription','$drip_dosage','$drip_duration')";
    $result = mysqli_query($connection , $query);
    if($result){
        $_SESSION["message_store_prescription"] = "<h2 style='color:#4169e1'>Prescription Added Successfully</h2>";
        header("location:../../views/profiles/doctor_profile.php");
    }

//	update_disease_in_map($patient_id,$diagnosis);
    else{
        $_SESSION["message_store_prescription"] = "<h2 style='color:#4169e1'>ID Does Not Exist</h2>";
        header("location:../../views/profiles/doctor_profile.php");
    }
}

function confirm_id($id)
{
	include("../../model/database/server.php");
	$query = "SELECT patient_id FROM patients";
	$result = $connection->query($query);
	$row = $result->fetch_all();
	$status = False;
	$all_arrays = array();
	foreach($row as $x => $x_value)
	 {
    array_push($all_arrays,$x_value);
  }
    $count = count($all_arrays);
    for($i=0; $i<$count;$i++)
    {
    	for ($j = 0; $j < count($all_arrays[0]); $j++)
				{
						if($id == $all_arrays[$i][$j])
							{
									$status = True;
							}
				}
		}
	return $status;
}



if(isset($_POST["submit"])){
$patient_id = $_POST["patient_id"];
$datestamp = $_POST["datestamp"];
$timestamp = $_POST["timestamp"];
$diagnosis = $_POST["diagnosis"];
$comments = $_POST["comments"];

$admission_status = $_POST["admission_status"];
$admission_date = $_POST["admission_date"];

$discharge_status = $_POST["discharge_status"];
$discharge_date = $_POST["discharge_date"];

$drug_prescription = $_POST["drug_prescription"];
$drug_dosage = $_POST["drug_dosage"];
$drug_duration = $_POST["drug_duration"];

$injection_prescription = $_POST["injection_prescription"];
$injection_dosage = $_POST["injection_dosage"];
$injection_duration = $_POST["injection_duration"];

$drip_prescription = $_POST["drip_prescription"];
$drip_dosage = $_POST["drip_dosage"];
$drip_duration = $_POST["drip_duration"];

if(confirm_id($patient_id)==1){
}
    $query = "INSERT INTO disease(patient_id,datestamp,timestamps,diagnosis,comments
        ,admission_status,admission_date,discharge_status,discharge_date,
        drug_prescription,drug_dosage,drug_duration,
        injection_prescription,injection_dosage,injection_duration,
        drip_prescription,drip_dosage,drip_duration) VALUES('$patient_id','$datestamp','$timestamp','$diagnosis','$comments'
        ,'$admission_status','$admission_date','$discharge_status','$discharge_date',
        '$drug_prescription','$drug_dosage','$drug_duration',
        '$injection_prescription','$injection_dosage','$injection_duration',
        '$drip_prescription','$drip_dosage','$drip_duration')";
    $result = mysqli_query($connection , $query);
    if($result){
        $query = "INSERT INTO map (patient_id , disease) VALUES('$patient_id' , '$diagnosis')";
        $result = mysqli_query($connection , $query);
        $_SESSION["message_store_prescription"] = "<h2 style='color:#4169e1'>Prescription Added Successfully</h2>";
        header("location:../../views/profiles/doctor_profile.php");
    }

//	update_disease_in_map($patient_id,$diagnosis);
    else{
        $_SESSION["message_store_prescription"] = "<h2 style='color:#4169e1'>ID Does Not Exist</h2>";
        header("location:../../views/profiles/doctor_profile.php");
    }
}
?>
