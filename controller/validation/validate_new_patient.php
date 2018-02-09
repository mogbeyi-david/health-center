<?php
include("validate_register.php");
$firstname=$lastname=$address=$gender=$email=$age=$parent_name=$parent_no=$marital_status=$city="";

$firstname_err = $lastname_err =$address_err = $gender_err = $email_err = $age_err =$parent_name_err = $parent_no_err=$marital_status_err=$city_err= "";
$message = "";

if (isset($_POST["add_patient_to_database"])){
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$gender =$_POST["gender"];
	$age_number = $_POST["age"];
	$units = $_POST["units"];
	$age = $age_number . $units;
	$parent_name = $_POST["parent_name"];
	$parent_no = $_POST["parent_no"];
	$guardian_gender = $_POST['guardian_gender'];
	$marital_status = $_POST["marital_status"];
	$city = $_POST["city"];
	$local_govt = $_POST["local_govt"];

if(check_name($firstname)[1] == 1
	and check_name($lastname)[1] == 1
	and check_email($email)[1] == 1
	and check_contact($parent_no)[1] == 1
	)
{
add_details_to_patients($firstname,$lastname,$address,$gender,$email,$age,$parent_name,$parent_no,$marital_status,$city,$local_govt,$guardian_gender);
$the_id = get_last_id();
set_id_in_map($the_id["patient_id"],$city);
}
else
{
	if(check_name($firstname)[1] == 0){
		$firstname_err = check_name($firstname)[0];
	}
	if(check_name($lastname)[1] == 0){
		$lastname_err = check_name($lastname)[0];
	}
	if(check_email($email)[1] == 0){
		$email_err = check_email($email)[0];
	}
	if(check_contact($contact)[1] == 0){
		$parent_no_err = check_contact($parent_no_err)[0];
	}
	if(check_password($password)[1] == 0){
		$password_err = check_password($password)[0];
	}
	if(validate_age($age)[1] == 0){
		$age_err = validate_age($age)[0];
	}
}

}
