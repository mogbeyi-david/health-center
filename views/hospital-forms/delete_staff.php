<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <title>Enter Id</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
    <style>
        th, td
        {
            padding: 8px;
            text-align: left;
        }

        tr:hover
        {
            background-color:#f5f5f5;
        }
    </style>
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="confirm('Do you Really Want To Delete This Staff');">
            <input type="text" name="id" placeholder="STAFF ID" required><br><br>
            <input type="submit" id="submit" name="submit">
        </form>
    </div>
</div>
<?php
include("../../model/database/server.php");
include("../../controller/actions/delete_staff.php");
$query = "SELECT * FROM staff";
$result = mysqli_query($connection , $query);
$all_arrays = array();
$count = mysqli_num_rows($result);
print("<h1>Total number of Staff: ".$count."</h1>");
print "<br>";
echo "<table style='border-collapse: collapse; width:100%'>";
echo '<tr>
		<td>ID</td>
		<td>TITLE</td>
		<td>FIRSTNAME</td>
		<td>LASTNAME</td>
		<td>SUFFIX</td>
		<td>EMAIL</td>
		<td>CONTACT</td>
		<td>GENDER</td>
	</tr>';

while($count > 0){
    for($i=0; $i<$count;$i++){
        $all_arrays[$i] = mysqli_fetch_assoc($result);

        echo '<tr>
		<td>'.$all_arrays[$i]['id'].'</td>
		<td>'.$all_arrays[$i]['title'].'</td>
		<td>'.$all_arrays[$i]['firstname'].'</td>
		<td>'.$all_arrays[$i]['lastname'].'</td>
		<td>'.$all_arrays[$i]['suffix'].'</td>
		<td>'.$all_arrays[$i]['email'].'</td>
		<td>'.$all_arrays[$i]['contact'].'</td>
		<td>'.$all_arrays[$i]['gender'].'</td>
	</tr>';

    }
    $count--;
}
echo "</table>";

?>
</body>
</html>

