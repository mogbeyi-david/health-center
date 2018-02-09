<?php include("../../controller/actions/update_immunization.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>IMMUNIZATION</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
</head>
<body>
<div class="login-page">
<div class="form">
<form method="post" class="login-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
<input type="text" name="patient_id" placeholder="PATIENT IDENTIFICATION NUMBER" required>
<br><br>
<h4 style="color: white; display: inline">SELECT THE IMMUNIZATION</h4>
<select name="diseases" class="diseases" style="width:50%;height:50px">
  <option value="hepatitis">HEPATITIS</option>
  <option value="rotavirus">ROTAVIRUS</option>
  <option value="diphteria">DIPHTERIA</option>
  <option value="haemophilus">HAEMOPHILUS</option>
  <option value="pneumococcal">PNEUMOCOCCAL</option>
  <option value="poliovirus">POLIO-VIRUS</option>
  <option value="influenza">INFLUENZA</option>
  <option value="measles">MEASLES</option>
</select>
<br><br>
    <h4 style="color: white; display: inline">Date of Immunization</h4>
    <input type="date" style="width:60%;" name="date_of_immunization" required>
<br><br>
<input type="submit" name="submit" id="submit">
</form>
</div>
</div>
</body>
</html>
