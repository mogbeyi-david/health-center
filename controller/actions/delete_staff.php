<?php
include("../../model/database/server.php");
if(isset($_POST["submit"]))
{
    $id = $_POST["id"];
    $check = "SELECT * FROM staff";
    $query = "DELETE FROM staff WHERE id='$id'";
    $pose = mysqli_query($connection , $check);
    $result = mysqli_query($connection , $query);
    $row = mysqli_fetch_assoc($pose);
    $old_number_of_staff = count($row);
    if($result)
    {
        $check = "SELECT * FROM staff";
        $pose = mysqli_query($connection , $check);
        $row = mysqli_fetch_assoc($pose);
        $new_number_of_staff = count($row);
        if($old_number_of_staff == $new_number_of_staff ){
            $_SESSION["message_delete_a_staff"] = "<h2 style='color: #4169e1'>The ID Does Not Exist</h2>";
            header("location:../../views/profiles/admin_profile.php");
        }else{
            $_SESSION["message_delete_a_staff"] = "<h2 style='color: #4169e1'>Staff has been deleted sucessfully</h2>";
            header("location:../../views/profiles/admin_profile.php");
        }
    }
}