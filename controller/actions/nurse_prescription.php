<html>
<head>
	<style>
table{
    border-collapse: collapse;
		 width:100%;
	}
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
<body>
<div>
			<?php
			include("../../model/database/server.php");
			if(isset($_POST['id'])){
                $id = $_POST["id"];
            }else{
                print("<h2 style='color:#4169e1;'>No ID Selected" . "<h2>");
            }
			$query = "SELECT * FROM disease WHERE patient_id='$id'";
			$result = mysqli_query($connection , $query);
			$all_arrays = array();
			$count = mysqli_num_rows($result);
			if($count == 0){
                $_SESSION["id_does_not_exist"] = "<h2 style='color:#4169e1'>This ID Does Not Exist</h2>";
                header("location:../../views/profiles/doctor_profile.php");
            }else{
                print("<h2 style='color:#4169e1;'>Total number of Cases: ".$count . "<h2>");
            }
			print "<br>";
			echo "<table>";
			echo '<tr>
<td>ID</td>
<td>PATIENT ID</td>
<td>DATESTAMP</td>
<td>TIMESTAMP</td>
<td>DIAGNOSIS</td>
<td>COMMENTS</td>
<td>ADMISSION STATUS</td>
<td>ADMISSION DATE</td>
<td>DISCHARGE STATUS</td>
<td>ADMINISTERED</td>
</tr>';


				for($i=0; $i<$count;$i++){
                    $all_arrays[$i] = mysqli_fetch_assoc($result);
                    echo '<tr>
    		<td>'.$all_arrays[$i]['id'].'</td>
    		<td>'.$all_arrays[$i]['patient_id'].'</td>
    		<td>'.$all_arrays[$i]['datestamp'].'</td>
    		<td>'.$all_arrays[$i]['timestamps'].'</td>
    		<td>'.$all_arrays[$i]['diagnosis'].'</td>
    		<td>'.$all_arrays[$i]['comments'].'</td>
    		<td>'.$all_arrays[$i]['admission_status'].'</td>
    		<td>'.$all_arrays[$i]['admission_date'].'</td>
    		<td>'.$all_arrays[$i]['discharge_status'].'</td>
    		<td>'."<input type=\"checkbox\"> Administered".'</td>
    	</tr>';

                }
				$count--;

			echo "</table>";
			?>
<?php print "<br>";print "<br>"?>

<a href ="../../views/profiles/nurse_profile.php">CLICK HERE TO GO BACK TO PROFILE PAGE</a>
</body>
</html>