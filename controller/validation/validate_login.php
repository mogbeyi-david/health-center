<?php
session_start();
include("../../model/database/server.php");
$email = $password = $error="";
function set_session($row){
	$_SESSION["id"]=$row["id"];
	$_SESSION["title"]=  $row["title"];
	$_SESSION["firstname"] =$row["firstname"];
	$_SESSION["lastname"] = $row["lastname"];
	$_SESSION["email"] = $row["email"];
	$_SESSION["suffix"] = $row["suffix"];
	$_SESSION["contact"] = $row["contact"];
	$_SESSION["gender"] = $row["gender"];
	$_SESSION["password"]=$row["password"];
	print "<script> alert('Hello World')</script>";
}
if (isset($_POST["submit"])){
$title = $_POST["title"];
$email = $_POST["email"];
$password = $_POST["password"];
if($title == "Administrator")
{
	$query = "SELECT * FROM admin where email='$email' and title='$title'";
}
else
{
	$query = "SELECT * FROM staff where email='$email' and title='$title'";
}

$result = $connection->query($query);
$row= mysqli_fetch_assoc($result);
if (mysqli_num_rows($result)>0 and $password  == $row["password"])
	{
	set_session($row);
	if($title == "Doctor"){
		header("location:../../views/profiles/doctor_profile.php");
	}elseif ($title == "Ward Nurse") {
		header("location:../../views/profiles/nurse_profile.php");
	}elseif($title == "Desk Nurse"){
		header("location:../../views/profiles/desk_nurse_profile.php");
	}else{
		header("location:../../views/profiles/admin_profile.php");
	}
	}
else
	{
    $error =  "<span style='color:red;'>The Email Address or the password is Wrong!</span>";
	}

$connection->close();
}


?>
