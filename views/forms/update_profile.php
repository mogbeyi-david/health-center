<?php include("../../controller/validation/validate_edit.php"); ?>
<?php
  $id = $_SESSION['id'];
  $query = "SELECT * FROM staff WHERE id= '$id'";
  $result = mysqli_query($connection , $query);
  if($result){
    $row = mysqli_fetch_assoc($result);
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PROFILE</title>
    <script>
      function confirm_password(){
        var new_password = document.getElementById('new_password').value;
        var old_password = document.getElementById('old_password').value;
        if(old_password !== new_password){
          document.getElementById(new_pword).innerHTML = "Passwords Do Not Match";
        }
      }
    </script>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
</head>
<body>
<div class="login-page">
<div class="form">
<form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post">
  <p><h2 style="color:white;"> EDIT PROFILE</h2><br><br>
  <input   type="text" name="id" id="firstname" value="<?php print($row["id"]);?>" style="width: 100%;" readonly><br>
  <select name="title" class="select" style="border-radius: 0px;">
    <?php
    if($row['title'] == 'Doctor'){
      print "<option value='Doctor' selected>DOCTOR</option>";
      print "<option value=\"Desk Nurse\" >DESK NURSE</option>";
      print "<option value=\"Ward Nurse\">WARD NURSE</option>";
      print "<option value=\"Administration\">ADMINISTRATOR</option>";
    }else if($row['title'] == 'Desk Nurse'){
      print "<option value='Doctor'>DOCTOR</option>";
      print "<option value=\"Desk Nurse\" selected>DESK NURSE</option>";
      print "<option value=\"Ward Nurse\">WARD NURSE</option>";
      print "<option value=\"Administration\">ADMINISTRATOR</option>";
    }else if($row['title'] == 'Ward Nurse'){
      print "<option value='Doctor'>DOCTOR</option>";
      print "<option value=\"Desk Nurse\" >DESK NURSE</option>";
      print "<option value=\"Ward Nurse\" selected>WARD NURSE</option>";
      print "<option value=\"Administration\">ADMINISTRATOR</option>";
    }else{
      print "<option value='Doctor'>DOCTOR</option>";
      print "<option value=\"Desk Nurse\">DESK NURSE</option>";
      print "<option value=\"Ward Nurse\">WARD NURSE</option>";
      print "<option value=\"Administration\" selected>ADMINISTRATOR</option>";
    }
    ?>
  </select><br><br>
  <input id="firstname" placeholder="*FIRSTNAME" type="text" name="firstname" id="firstname" value="<?php print($row["firstname"]);?>" onchange="check_name_length('firstname','fname')" required><span id="fname"><?php print $firstname_err; ?></span>
  <input id="lastname" type="text" placeholder="*LASTNAME" name="lastname" id="lastname" value="<?php print($row["lastname"]);?>" onchange="check_name_length('lastname','lname')" required><span id="lname"><?php print $lastname_err; ?></span>
  <input id="suffix" placeholder="*SUFFIX" type="text" name="suffix" id="suffix" value="<?php print($row["suffix"]);?>">
  <input type="email" placeholder="*EMAIL ADDRESS" name="email" id="email" value="<?php print($row["email"]);?>" required><span id="mail"><?php print $email_err; ?></span>
  <input type="text" name="contact" placeholder="*PHONE NUMBER" id="contact" value="<?php print($row["contact"]);?>" required>
  <select name="gender" class="select" style="border-radius: 0px;">
    <?php
    if($row['gender'] == 'Male'){
      print "<option value=\"Male\" selected>Male</option>";
      print "<option value=\"Female\" >Female</option>";
    }else if($row['gender'] == 'Female'){
      print "<option value='Male'>Male</option>";
      print "<option value=\"Female\" selected>Female</option>";
    }
    ?>
  </select><br><br>
  <input type="password" placeholder="ENTER OLD PASSWORD" name="old_password" id="old_password"  required><span class="error" id="old_pword"><?php print $password_err; ?></span><br><br>
  <input type="password" placeholder="*ENTER NEW PASSWORD" name="new_password" id="new_password" ><span class="error" id="new_pword"></span><br><br>
  <input type="Submit" name="update" class="submit" id="submit">
</form>
</div>
</div>
<script type="text/javascript" src="../js/validate_register.js"></script>
<script type="text/javascript" src="../../js/validate_register.js"></script>
</body>
</html>
