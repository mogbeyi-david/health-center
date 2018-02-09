<?php
/**
 * Created by PhpStorm.
 * User: hydee
 * Date: 5/10/16
 * Time: 12:43 PM
 *
 */
$servername = "localhost";
$server_username = "root";
$server_password = "";
$server_dbname = "pediatrics";

$connection = new mysqli($servername,$server_username,$server_password,$server_dbname);
if(!$connection){
    die("Connection was not Successful " . mysqli_connect_error());
}

$select = "SELECT * FROM states";
$result = mysqli_query($connection,$select);

$state = array();
$lg = array();
echo '<script>';
echo "function states(){";

while($retch = mysqli_fetch_assoc($result)){
     $state[] = $retch['name'];
    $eachLg =array();

    $lga_select = "SELECT * FROM locals WHERE state_id = '".$retch['id']."'";
    $lga_result = mysqli_query($connection,$lga_select);
   // echo mysqli_num_rows($lga_result);
    while($fetchLga = mysqli_fetch_assoc($lga_result)){

         $eachLg[] = $fetchLga['lga_names'];
    }
    $lg[] = $eachLg;
}



    echo 'var state ='.json_encode($state).';';
echo "  return state;
}

";

echo "
function LGAs(){
    var lga = ".json_encode($lg).";
    console.log(lga);
    return lga;
}
";

echo '</script>';