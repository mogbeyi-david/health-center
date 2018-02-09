<?php include("../../controller/validation/validate_login.php"); ?>
<!DOCTYPE html>
<html>
<head>
	 <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/login.css">
    <link rel="stylesheet" type="text/css" href="../../stylesheets/style.css">
		<!-- <link rel="stylesheet" type="text/css" href="stylesheets/boot/css/bootstrap.min.css"> -->
</head>
<body>
  <div id="header">
	  <a href="../../images/oaulogo.png" class="logo"><img src="../../images/oaulogo.png" style="height: 80px; display: inline; width: 100px;" alt=""></a>
	  <h1 style="display: inline; color: white; text-align: center; margin-left: 20%;">OAUTHC<span style="margin-left: 10px;"></span> PAEDIATRIC<span style="margin-left: 10px;"></span> HEALTH<span style="margin-left: 10px;"></span> CENTER<span style="margin-left: 10px;"></span></h1>
	  <a href="index.html" class="logo"><img src="../../images/logos.png" style="height: 80px; width: 100px; display: inline; float: right;"></a>
		<ul>
			<li>
				<a href="../../index.php">Home</a>
			</li>
			<li>
				<a href="../webpages/about.html">About</a>
			</li>
			<li>
				<a href="../webpages/services.html">Services</a>
			</li>
			<li>
				<a href="../webpages/contact.php">Contact</a>
			</li>
			<li>
				<a href="../webpages/information.html">Information</a>
			</li>
			<li class="selected">
				<a href="login.php">Staff</a>
			</li>
		</ul>
	</div>
<div class="login-page">
<div class="form">
<form class="login-form" method="post" action="login.php">
    <h2 style="color:white;">LOG IN</h2>
     <?php print $error; ?>
     <?php print "<br>"; ?>
    <select name="title" class="select">
    <option value="Doctor">DOCTOR</option>
    <option value="Ward Nurse"> WARD NURSE</option>
		<option value="Desk Nurse">DESK NURSE</option>
    <option value="Administrator">ADMINISTRATOR</option>
  </select><br><br>
      <input type="email" placeholder="EMAIL" name="email" value="<?php print($email);?>" required><br><br>
    <input type="password" placeholder="PASSWORD" name="password" value="<?php print($password);?>" required><br><br>
    <input class="submit" type="submit" name = "submit" id="submit" value="Log In"><br>
    </form>
</div>
</div>
<script src="js/login.js"></script>
</body>
</html>
