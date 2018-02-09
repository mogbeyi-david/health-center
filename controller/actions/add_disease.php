<?php
session_start();
include("../../model/database/database_fns.php");
if(isset($_POST["submit"])){
$patient_id = $_POST["patient_id"];
$date = $_POST["date"];

if(check_for_id($patient_id) == True){
  $from_doctor = get_disease($patient_id,$date);
}else{
  $_SESSION["id_does_not_exist"] = '<h2 style="color: #4169e1">This ID does Not Exist</h2>';
  header("location:../../views/profiles/nurse_profile.php");
}
}

if(isset($_POST["update"])){
$patient_id = $_POST["patient_id"];
$date = $_POST["date"];
$from_doctor = get_disease($patient_id,$date);
}
