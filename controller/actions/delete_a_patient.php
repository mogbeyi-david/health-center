<?php

session_start();
include("../../model/database/server.php");

    if(isset($_POST["delete_patient"]))
    {
        $patient_id = $_POST["patient_id"];
        $query = "DELETE FROM patients WHERE patient_id='$patient_id'";
        $result = mysqli_query($connection, $query);
        if ($result) {
            $_SESSION["message_delete_a_patient"] = "<h2 style='color:#4169e1;'>Patient has been deleted sucessfully</h2>";
            header("location:../../views/profiles/desk_nurse_profile.php");
        }
    }


?>