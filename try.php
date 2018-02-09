<?php
//        $state = ???;
echo $_GET['lga'];
include "model/database/server.php";
$state= $_GET['lga'];
$query = "SELECT state_id  FROM states WHERE name='$state'";
$result = mysqli_query($connection , $query);
$result = mysqli_fetch_all($result);
$id = $result[0][0];
$query = "SELECT local_name FROM locals WHERE state_id='$id'";
$result = mysqli_query($connection , $query);
if($result){
    $rows = mysqli_fetch_all($result);
    print '<option value="">Local Government Area</option>';
    foreach($rows as $row){
        echo '<option value="'.$row['local_name'].'">'.$row['local_name'].'</option>';
    }
}else{
    print "no local";
}
?>