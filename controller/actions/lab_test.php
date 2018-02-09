<?php
session_start();
include ("../../model/database/server.php");
function confirm_id($connection , $patient_id , $disease , $date , $name_of_nurse , $analysis){
    $query = "SELECT * FROM patients WHERE patient_id = '$patient_id'";
    $result = mysqli_query($connection , $query);
    $result_set = mysqli_fetch_assoc($result);
    $number = count($result_set);
    if($number > 0){
        $query = "INSERT INTO labtest(patient_id , disease , dates , nurse , analysis)
              VALUES('$patient_id' , '$disease' , '$date' , '$name_of_nurse' , '$analysis')";
        $result = mysqli_query($connection , $query);
        if($result)
        {
            $_SESSION["message_lab_test_result"] = "<h2 style='color: #4169e1'>Data Added Successfully</h2>";
            header("location:../../views/profiles/nurse_profile.php");
        }
        else
        {
            print("<h1>Data Not Added Successfully!</h1>");
        }
    }else{
        $_SESSION["message_add_patient_details"] = "<h2 style='color:#4169e1'>This ID Does Not Exist</h2>";
        header("location:../../views/profiles/nurse_profile.php");
    }
}
if(isset($_POST["submit"]))
{
    $patient_id = $_POST["patient_id"];
    $disease = $_POST["disease"];
    $date = $_POST["date"];
    $name_of_nurse = $_POST["name_of_nurse"];
    $analysis = $_POST["analysis"];
    confirm_id($connection , $patient_id , $disease , $date , $name_of_nurse , $analysis);



}

?>