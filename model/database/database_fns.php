<?php
if(!isset($_SESSION)){
	session_start();
}
include("server.php");
function declare_error($connection){
	include("server.php");
	echo "Error: " . $query . "<br>" . $connection->error;
	print "<br>";
	print "<h1>OOPS!! A problem seems to have occured, please contact the IT department</h1>";
}

function add_details_to_staff($title,$firstname,$lastname,$suffix,$email,$contact,$gender,$password){
	include("server.php");
	print"<br>";
	$query = "INSERT INTO staff(title,firstname,lastname,suffix,email,contact,gender,password)";
			$query.=" VALUES('$title','$firstname','$lastname','$suffix','$email','$contact','$gender','$password')";

	if ($connection->query($query) === TRUE) {
    	return True;
	}else {
    	print ("<h2>Information Not Added Successfully</h2>");
		print ("<br>");
		print $connection->error;
	}

	$connection->close();
}

function add_details_to_patients($firstname,$lastname,$address,$gender,$email,$age,$parent_name,$parent_no,$marital_status,$city,$local_govt,$guardian_gender){
	include("server.php");
	print"<br>";
	$query = "INSERT INTO patients(firstname,lastname,address,gender,email,age,parent_name,parent_number,marital_status,city,local_govt,guardian_gender)";
			$query.=" VALUES('$firstname','$lastname','$address','$gender','$email','$age','$parent_name','$parent_no','$marital_status','$city','$local_govt','$guardian_gender')";

	if ($connection->query($query) === TRUE){
		$query = "INSERT INTO map(local_govt) VALUES('$local_govt')";
		$result = mysqli_query($connection , $query);
		$_SESSION["message_add_new_patient"] = "<h2 style='color: #4169e1'>Patient Added Successfully</h2>";
    	header("location:../../views/profiles/desk_nurse_profile.php");
	}else {
		print ("<h2>Information Not Added Successfully</h2>");
		print ("<br>");
		print $connection->error;
	}

	$connection->close();
}

function nurse_add_details($patient_id,$height,$weight,$blood_pressure,$temperature){
	include("server.php");
	print"<br>";
	$query = "INSERT INTO patient_nurse(patient_id,height,weight,blood_pressure,temperature) VALUES('$patient_id','$height','$weight','$blood_pressure','$temperature')";
	$result = mysqli_query($connection , $query);
	if ($result) {
    	print "<h1>DATA HAS BEEN SUCCESSFULLY ADDED</h1>";
	}else {
    	echo "Error: " . $query . "<br>" . $connection->error;
			print "<br>";
			print "<h1>OOPS!! A problem seems to have occured, please contact the IT department</h1>";
	}

	$connection->close();
}

function edit_profile($title,$firstname,$lastname,$suffix,$email,$contact,$gender,$password){
	include("server.php");
	print"<br>";
	$id = $_SESSION["id"];
	$query = "UPDATE staff SET title='$title',firstname='$firstname',lastname='$lastname',suffix='$suffix',email='$email',contact='$contact',password='$password' WHERE id = $id";

	if ($connection->query($query) === TRUE) {
		$_SESSION['wrong_password'] = "<h2 style='color: #4169e1'>Information Updated Successfully</h2>";
		if($title == 'Desk Nurse'){
			header("location:../../views/profiles/desk_nurse_profile.php");
		}else if($title == 'Ward Nurse'){
			header("location:../../views/profiles/nurse_profile.php");
		}else if($title == 'Doctor'){
			header("location:../../views/profiles/doctor_profile.php");
		}else{
			header("location:../../views/profiles/admin_profile.php");
		}
	}else {
    	echo "Error: " . $query . "<br>" . $connection->error;
	}

	$connection->close();
}


function add_disease($patient_id,$date_admitted,$date_discharged,$dosage,$duration){
	include("server.php");
	$query = "UPDATE disease SET date_admitted='$date_admitted',date_discharged='$date_discharged',dosage='$dosage',duration='$duration'  WHERE patient_id='$patient_id'";
	$result = mysqli_query($connection , $query);
	if($result){
		$_SESSION["message_update_disease"] = "<h2 style='color:#4169e1'>Prescription Added Successfully</h2>";
		header("location:../../views/profiles/nurse_profile.php");
	}
}

function add_immunization($focal,$column , $dates){
	include("server.php");
	$query = "UPDATE immunization SET {$column}='$dates' where focal='$focal'";
	$result = mysqli_query($connection , $query);
	if($result){
		$_SESSION["message_Immunization"] = "<h2 style='color: #4169e1'>Immunization Data Recorded Successfully</h2>";
		header("location:../../views/profiles/nurse_profile.php");
	}
}

function insert_empty_row($focal,$hepatitis,$rotavirus,$diphteria,$haemophilus,$pneumococcal,$poliovirus,$influenza,$measles){
	include("server.php");
	$query = "INSERT INTO immunization(focal,hepatitis,rotavirus,diphteria,haemophilus,pneumococcal,poliovirus,influenza,measles)VALUES('$focal','$hepatitis','$rotavirus','$diphteria','$haemophilus','$pneumococcal','$poliovirus','$influenza','$measles')";
	$result = mysqli_query($connection , $query);
	if($result){
		$_SESSION["message_Immunization"] = "<h2 style='color: #4169e1'>Immunization Data Added Successfully</h2>";
		header("location:../../views/profiles/nurse_profile.php");
	}
}

function disease_to_patients(){
	include("server.php");
	$query = "SELECT * FROM disease INNER JOIN patients ON disease.date_discharged='Still Admitted'";
	$result = $connection->query($query);
	$row = $result->fetch_assoc();
	print_r($row);
	print "<br>";
	print "<br>";
	print "<br>";
}

function disease_to_patient_nurse(){
	include("server.php");
	$query = "SELECT * FROM disease INNER JOIN patient_nurse ON disease.date_discharged='Still Admitted'";
	$result = $connection->query($query);
	$row = $result->fetch_assoc();
	print_r($row);
	print "<br>";
	print "<br>";
	print "<br>";
}

function disease_to_immunization(){
	include("server.php");
	$query = "SELECT * FROM disease INNER JOIN immunization ON disease.date_discharged='Still Admitted'";
	$result = $connection->query($query);
	$row = $result->fetch_assoc();
	print_r($row);
	print "<br>";
	print "<br>";
	print "<br>";
}

function check_success($query){
	include("server.php");
	if ($connection->query($query) === TRUE) {
    	echo "<h2>Information Added Successfully</h2>";
	}else {
    	echo "Error: " . $query . "<br>" . $connection->error;
	}

	$connection->close();
}

function check_database($focal){
	$status = True;
	include("server.php");
	$query = "SELECT * FROM immunization where focal='$focal'";
	$result = $connection->query($query);
	if ($result->num_rows > 0)
	{
    	$status == True;
	}
	else
	{
    	$status = False;
	}
	$connection->close();
	return $status;
}


function store_prescription($patient_id,$date,$diagnosis,$comments,$prescription){
	include("server.php");
	$query = "INSERT INTO disease(patient_id,dates,disease,comments,drugs) VALUES('$patient_id','$date','$diagnosis','$comments','$prescription')";
	$result = mysqli_query($connection , $query);
	if($result){
		$_SESSION["message_store_prescription"] = "<h2 style='color:#4169e1'>Prescription Added Successfully</h2>";
		header("location:../../views/profiles/doctor_profile.php");
	}
}

function get_disease($patient_id,$date){
	include("server.php");
	$query = "SELECT patient_id,disease,drugs FROM disease WHERE patient_id='$patient_id' and dates='$date'";
	$result = $connection->query($query);
	$row = $result->fetch_assoc();
	return $row;
}

function mailer(){
		include("server.php");
		$query = "SELECT email FROM patients";
		$result = $connection->query($query);
		$row = $result->fetch_all();
		return $row;
}

function check_for_id($id){
	include("server.php");
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

function get_last_id(){
		include("server.php");
		$query = "SELECT patient_id FROM patients ORDER BY patient_id DESC";
		$result = $connection->query($query);
		$row = $result->fetch_assoc();
		return $row;
}

function set_id_in_map($patient_id,$city){
	$query = "INSERT INTO map(patient_id,local_govt) VALUES('$patient_id','$city')";
	check_success($query);
}
function update_disease_in_map($patient_id,$diagnosis){
	$query = "UPDATE map set disease='$diagnosis' WHERE patient_id='$patient_id'";
	include("server.php");
	if ($connection->query($query) === TRUE) {
		return True;
	}else {
		echo "Error: " . $query . "<br>" . $connection->error;
	}
}

function check_for_email($email){
	include("server.php");
	$query = "SELECT * FROM staff WHERE email = '$email'";
	$result = $connection->query($query);
	if ($result->num_rows > 0)
	{
		return False;
  }
	else
	{
		return True;
	}
}
?>
