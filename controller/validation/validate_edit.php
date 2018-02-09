<?php
session_start();
include("../../model/database/server.php");
include("../../model/database/database_fns.php");
function check_name_length($name){
  $status = True;
  $message = False;
  if(strlen($name) < 3)
  {
    $message = "your name should not be less than three letters";
    $status = False;
  }
  return array($message , $status);
}

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

function check_password($password){
  $status = True;
  $message = "okay";
  if(strlen($password) < 6){
    $message = "Invalid Old Password Entered";
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
function confirm_password($connection , $old_password , $id){
  $query = "SELECT password FROM staff WHERE id = '$id'";
  $result = mysqli_query($connection , $query);
  $row = mysqli_fetch_assoc($result);
  if($row['password'] == $old_password){
    return True;
  }else{
    return False;
  }
}
$title=$firstname=$lastname=$suffix=$email=$contact=$gender=$password=$auth=$con_auth="";


$firstname_err = $lastname_err = $email_err = $contact_err = $password_err = $auth_err = "";

if (isset($_POST["update"])){
  $title = $_POST["title"];
  $id = $_POST['id'];
  $old_password = $_POST["old_password"];
if(confirm_password($connection , $old_password , $id) == 1){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $suffix = $_POST["suffix"];
  $email = $_POST["email"];
  $contact =$_POST["contact"];
  $gender = $_POST["gender"];
  $new_password = $_POST["new_password"];
  $password = $new_password;
}else{
  $_SESSION['wrong_password'] = "<h2 style='color: #4169e1'>Wrong Password Entered</h2>";
  if($title == 'Desk Nurse'){
    header("location:../../views/profiles/desk_nurse_profile.php");
  }else if($title == 'Ward Nurse'){
    header("location:../../views/profiles/nurse_profile.php");
  }else if($title == 'Doctor'){
    header("location:../../views/profiles/doctor_profile.php");
  }else{
    header("location:../../views/profiles/admin_profile.php");
  }
}


if(check_name_length($firstname)[1] == 1
  and check_name_length($lastname)[1] == 1
  and check_name($firstname)[1] == 1
  and check_name($lastname)[1] == 1
  and check_email($email)[1] == 1
  and check_password($password)[1]==1
    and confirm_password($connection , $old_password , $id) == 1
  )
{

  edit_profile($title,$firstname,$lastname,$suffix,$email,$contact,$gender,$password);
}
else
{
  if(check_name_length($firstname)[1] == 0){
    $firstname_err = check_name_length($firstname)[0];
  }
  if(check_name_length($lastname)[1] == 0){
    $lastname_err = check_name_length($firstname)[0];
  }
  if(check_name($firstname)[1] == 0){
    $firstname_err = check_name($firstname)[0];
  }
  if(check_name($lastname)[1] == 0){
    $lastname_err = check_name($firstname)[0];
  }
  if(check_email($email)[1] == 0){
    $email_err = check_email($email)[0];
  }
  if(check_contact($contact)[1] == 0){
    $contact_err = check_contact($contact)[0];
  }
  if(check_password($password)[1] == 0){
    $password_err = check_password($password)[0];
  }
  if(authenticate($auth)[1] == 0){
    $auth_err = authenticate($auth)[0];
  }

}
}
?>
