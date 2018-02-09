<?php
include("../../model/database/server.php");
if(isset($_POST["update"]))
{
    $patient_id = $_POST["patient_id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $parent_name = $_POST["parent_name"];
    $age = $_POST["age"].$_POST["units"];
    $email = $_POST["email"];
    $parent_no = $_POST["parent_no"];
    $marital_status = $_POST["marital_status"];
    $city = $_POST["city"];
    $local_govt = $_POST["local_govt"];

    $query = "UPDATE patients
    SET firstname='$firstname', lastname='$lastname',gender='$gender',
    parent_name='$parent_name', parent_number='$parent_no',email='$email',
    age='$age',parent_number='$parent_no',marital_status='$marital_status',city='$city',local_govt='$local_govt'
    WHERE patient_id='$patient_id'";
    $result = mysqli_query($connection , $query);
    if($result)
    {
        $_SESSION["message_edit_patient_details"] = "<h2 style='color:#4169e1'>Updated Successfully</h2>";
        header("location:../../views/profiles/desk_nurse_profile.php");
    }else
    {
        print("<h2>The information did not update successfully</h2>");
    }

}