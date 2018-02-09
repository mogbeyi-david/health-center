<?php
include("../../model/database/server.php");
include("../../model/database/database_fns.php");

function check_name($name){
	$status = True;
	$message = "okay";
	if(!ctype_alpha($name))
	{
		$message = "your name should contain only letters";
		$status = False;
	}
	return array($message , $status);
}

function check_email($email){
	$status = True;
	$message = "okay";
	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$message = "The Email You Entered is Not Valid";
        $status=False;
    }
    return array($message , $status);
}

function check_password($password , $confirm_password){
	$status = True;
	$message = "okay";
	if(strlen($password) < 6){
		$message = "Password Should not be less than six(6) characters";
		$status = False;
	}
	if($password !== $confirm_password){
		$message = "Password and Password Confirmation Do Not Match";
		$status = False;
	}
	return array($message ,  $status);
}

function authenticate($auth){
	$status = True;
	$message = "okay";
	if($auth != "123456")
	{
		$message = "The hospital identification code is not correct";
		$status = False;
	}
	return array($message ,  $status);
}

function check_contact($contact){
	$status = True;
	$message = "okay";
	if(!is_numeric($contact)){
		$message = "Your contact should contain only numbers";
		$status = False;
	}
	return array($message ,  $status);
}

function validate_age($age){
	$message= "okay";
	$status = True;
	if($age <= 0){
		$message = "Your age cannot be less than or equal to zero(0)";
		$status = False;
	}
	if(!is_numeric($age)){
		$message = "The age must be a number";
		$status = False;
	}
	if($age > 21){
		$message = "The pediatric ward does not cover ages greater than 21";
		$status = False;
	}
	return array($message , $status);
}

function set_session(){
	$_SESSION["id"]=$_POST["id"];
	$_SESSION["title"]=  $_POST["title"];
	$_SESSION["firstname"] =$_POST["firstname"];
	$_SESSION["lastname"] = $_POST["lastname"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["suffix"] = $_POST["suffix"];
	$_SESSION["contact"] =$_POST["contact"];
	$_SESSION["gender"] = $_POST["gender"];
	$_SESSION["password"]=$_POST["password"];
}

$title=$firstname=$lastname=$suffix=$email=$contact=$gender=$password=$auth=$con_auth="";


$firstname_err = $lastname_err = $email_err = $contact_err = $password_err = $auth_err = "";

if (isset($_POST["submit"])){

$title = $_POST["title"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$suffix = $_POST["suffix"];
$email = $_POST["email"];
$contact =$_POST["contact"];
$gender = $_POST["gender"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$auth = $_POST["hac"];
$con_auth = $_POST["chac"];
$row = $_POST;


if(check_name($firstname)[1] == 1
	and check_name($lastname)[1] == 1
	and check_email($email)[1] == 1
	and check_password($password , $confirm_password)[1]==1
	and authenticate($auth)[1] == 1
	and authenticate($con_auth)[1] == 1
	and check_for_email($email) == 1)
{
	add_details_to_staff($title,$firstname,$lastname,$suffix,$email,$contact,$gender,$password);

	if($title == "Doctor")
	{
		$_SESSION["message_add_new_doctor"] = "<h2 style='color:#4169e1'>New Doctor Has Been Added Successfully</h2>";
		header("location:../../views/profiles/admin_profile.php");
	}
	elseif ($title == "Ward Nurse")
	{
		$_SESSION["message_add_new_nurse"] = "<h2 style='color:#4169e1'>New Nurse Has Been Added Successfully</h2>";
		header("location:../../views/profiles/admin_profile.php");
	}
	elseif($title == "Desk Nurse")
	{
		$_SESSION["message_add_new_nurse"] = "<h2 style='color:#4169e1'>New Nurse Has Been Added Successfully</h2>";
		header("location:../../views/profiles/admin_profile.php");
	}
	else
	{
		header("location:../../views/profiles/admin_profile.php");
	}
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
		$contact_err = check_contact($contact)[0];
	}
	if(check_password($password,$confirm_password)[1] == 0){
		$password_err = check_password($password,$confirm_password)[0];
	}
	if(authenticate($auth)[1] == 0){
		$auth_err = authenticate($auth)[0];
	}
	if(check_for_email($email) == 0){
		$email_err = "The Email Already Exists";
	}

}
}
?>
