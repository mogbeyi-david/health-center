<?php include("../../controller/validation/validate_edit.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>UPDATE PROFILE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post">
            <p><h2 style="color:white;"> EDIT PROFILE</h2><br><br>
            <select name="title" class="select">
                <option value="Doctor">Desk Nurse</option>
                <option value="Nurse">NURSE</option>
                <option value="Administration">ADMINISTRATOR</option>
            </select><br><br>
            <input id="firstname" placeholder="*FIRSTNAME" type="text" name="firstname" id="firstname" value="<?php print($_SESSION["firstname"]);?>" onchange="check_name_length('firstname','fname')" required><span id="fname"><?php print $firstname_err; ?></span>
            <input id="lastname" type="text" placeholder="*LASTNAME" name="lastname" id="lastname" value="<?php print($_SESSION["lastname"]);?>" onchange="check_name_length('lastname','lname')" required><span id="lname"><?php print $lastname_err; ?></span>
            <input id="suffix" placeholder="*SUFFIX" type="text" name="suffix" id="suffix" value="<?php print($_SESSION["suffix"]);?>">
            <input type="email" placeholder="*EMAIL ADDRESS" name="email" id="email" value="<?php print($_SESSION["email"]);?>" required><span id="mail"><?php print $email_err; ?></span>
            <input type="text" name="contact" placeholder="*PHONE NUMBER" id="contact" value="<?php print($_SESSION["contact"]);?>" required>
            <select name="gender" class="select">
                <option value="Male">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select><br><br>
            <input type="password" placeholder="*PASSWORD" name="password" id="password" value="<?php print($_SESSION["password"])?>" onchange="check_password_length()" required><span class="error" id="pword"><?php print $password_err; ?></span><br><br>
            <input type="Submit" name="update" class="submit" id="submit">
        </form>
    </div>
</div>
<script type="text/javascript" src="register.js"></script>
<script type="text/javascript" src="js/register.js"></script>
</body>
</html>
