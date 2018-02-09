<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
</head>
<body>
<div class="login-page">
<div class="form">
  <?php include("../../controller/validation/validate_register.php"); ?>
<form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post">
  <p> All fields marked * are required</p><br><br>
  <select name="title" class="select">
    <option value="Doctor">DOCTOR</option>
  </select><br><br>
  <input id="firstname" placeholder="*FIRSTNAME" type="text" name="firstname" id="firstname" value="<?php print($firstname);?>" onchange="check_name_length('firstname','fname')" required><span id="fname"><?php print $firstname_err; ?></span>
  <input id="lastname" type="text" placeholder="*LASTNAME" name="lastname" id="lastname" value="<?php print($lastname);?>" onchange="check_name_length('lastname','lname')" required><span id="lname"><?php print $lastname_err; ?></span>
  <input id="suffix" placeholder="SUFFIX" type="text" name="suffix" id="suffix" value="<?php print($suffix);?>">
  <input type="email" placeholder="*EMAIL ADDRESS" name="email" id="email" value="<?php print($email);?>" required><span id="mail"><?php print $email_err; ?></span>
  <input type="text" name="contact" placeholder="*PHONE NUMBER" id="contact" value="<?php print($contact);?>" required>
  <select name="gender" class="select">
    <option value="Male">MALE</option>
    <option value="Female">FEMALE</option>
  </select><br><br>
  <input type="password" placeholder="*PASSWORD" name="password" id="password" value="<?php print($password)?>" onchange="check_password_length()" required><span class="error" id="pword"><?php print $password_err; ?></span><br><br>
  <input type="password" placeholder="*CONFIRM PASSWORD" name="confirm_password" id="confirm_password" value="<?php print($password)?>" onchange="check_password_length()" required><span class="error" id="pword"><?php print $password_err; ?></span><br><br>
  <input type="password" placeholder="*HOSPITAL AUTHENTICATION CODE" name="hac" id="hac" value="<?php print($auth);?>" required><br><br>
  <input type="password" placeholder="*CONFIRM HOSPITAL AUTHENTICATION CODE" name="chac" id="chac" onchange="check_authentication()" value="<?php print($con_auth);?>" required><span class="error" id="auth"><?php print $auth_err; ?></span></span><br><br>
  <input type="Submit" name="submit" class="submit" id="submit">
</form>
</div>
</div>
<script type="text/javascript" src="register.js"></script>
<script type="text/javascript" src="js/register.js"></script>
</body>
</html>
