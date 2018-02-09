<?php

$server= "localhost";
$server_name= "root";
$server_password= "";
$database= "pediatric";

//connect to database
$connection= mysqli_connect($server,$server_name,$server_password,$database);
if (!$connection){
    die("unable to connect to database". mysqli_connect_errno());
}

?>
