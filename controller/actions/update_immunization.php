<?php
include("../../model/database/database_fns.php");
function confirm_id($connection , $patient_id){
  $query = "SELECT * FROM patients WHERE patient_id = '$patient_id'";
  $result = mysqli_query($connection , $query);
  $result_set = mysqli_fetch_assoc($result);
  $number = count($result_set);
  if($number > 0){
    if(check_database($patient_id) == False)
    {
      insert_empty_row("$patient_id","","","","","","","","");
    }
    else
    {
      $patient_id = $_POST['patient_id'];
      $column = $_POST['diseases'];
      $date = $_POST['date_of_immunization'];
      add_immunization($patient_id,$column , $date);
    }
  }
  else{
    $_SESSION["message_add_patient_details"] = "<h2 style='color:#4169e1'>This ID Does Not Exist</h2>";
    header("location:../../views/profiles/nurse_profile.php");
  }
}
if(isset($_POST["submit"])){
$patient_id = $_POST["patient_id"];
$table = $_POST["diseases"];
$date = $_POST["date_of_immunization"];
 confirm_id($connection , $patient_id);
}




?>
