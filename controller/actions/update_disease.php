<?php
if(isset($_POST["update"])){
$drugs = $_POST["drugs"];
$date_admitted=$_POST["date_admitted"];
if($date_admitted = "0000-00-00"){
    $date_admitted = "Not Admitted";
}
$date_discharged = $_POST["admission_status"];
$dosage = $_POST["dosage"];
$duration = $_POST["duration"];
add_disease($patient_id,$date_admitted,$date_discharged,$dosage,$duration);
}
