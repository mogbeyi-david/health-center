<html>
<head>
    <style>
        th, td
        {
            padding: 8px;
            text-align: left;
            border: 1px solid black;
        }

        tr:hover
        {
            background-color:#f5f5f5;
        }
    </style>
</head>
</html>
<?php
session_start();
//print "<pre>";
//print_r($_SESSION);
//print "</pre>";
include("../../model/database/server.php");
if(isset($_SESSION["firstname"]) and $_SESSION['lastname']){
    $title = $_SESSION['title'];
    $firstname = $_SESSION["firstname"];
    $lastname = $_SESSION["lastname"];
    $firstname = ucfirst(strtolower($firstname));
    $lastname = ucfirst(strtolower($lastname));
    $name = $firstname ." " . $lastname;
}
if($title == 'Desk Nurse'){
    $query = "SELECT * FROM shift WHERE desk_nurse_id='$name'";
}else if($title == 'Ward Nurse'){
    $query = "SELECT * FROM shift WHERE second_ward_nurse='$name'";
}else if($title == "Doctor"){
    $query = "SELECT * FROM shift WHERE doctor='$name'";
}
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("<h1>Total number of Work Days: ".$count."</h1>");
print "<br>";
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
		<td>S/N</td>
		<td>DAY</td>
		<td>DUTY</td>
		<td>DESK NURSE</td>
		<td>WARD NURSE ONE</td>
		<td>WARD NURSE TWO</td>
		<td>DOCTOR</td>
	</tr>';

    for($i=0; $i<$count;$i++){
        $all_arrays[$i] = mysqli_fetch_assoc($result);

        echo '<tr>
		<td>'.$all_arrays[$i]['id'].'</td>
		<td>'.$all_arrays[$i]['days_id'].'</td>
		<td>'.$all_arrays[$i]['duties_id'].'</td>
		<td>'.$all_arrays[$i]['desk_nurse_id'].'</td>
		<td>'.$all_arrays[$i]['first_ward_nurse'].'</td>
		<td>'.$all_arrays[$i]['second_ward_nurse'].'</td>
		<td>'.$all_arrays[$i]['doctor'].'</td>
	</tr>';

    }
    $count--;

echo "</table>";

?>

