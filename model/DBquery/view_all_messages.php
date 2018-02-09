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
include("../database/server.php");
$query = "SELECT * FROM messages";
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("<h1>Total number of messages: ".$count."</h1>");
print "<br>";
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
		<td>S/N</td>
		<td>Firstname</td>
		<td>Lastname</td>
		<td>Email</td>
		<td>Contact</td>
		<td>Subject</td>
		<td>Message</td>
		<td>Date</td>
		<td>Time</td>
	</tr>';

    for($i=0; $i<$count;$i++){
        $all_arrays[$i] = mysqli_fetch_assoc($result);

        echo '<tr>
		<td>'.$all_arrays[$i]['id'].'</td>
		<td>'.$all_arrays[$i]['firstname'].'</td>
		<td>'.$all_arrays[$i]['lastname'].'</td>
		<td>'.$all_arrays[$i]['email'].'</td>
		<td>'.$all_arrays[$i]['contact'].'</td>
		<td>'.$all_arrays[$i]['subject'].'</td>
		<td>'.$all_arrays[$i]['message'].'</td>
		<td>'.$all_arrays[$i]['dates'].'</td>
		<td>'.$all_arrays[$i]['times'].'</td>
	</tr>';

    }
    $count--;
echo "</table>";

?>
