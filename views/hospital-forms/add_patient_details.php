<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Patient Details</title>
	<link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
</head>
<body>
<div class="login-page">
<div class="form">
	<?php include("../../controller/actions/add_details.php");?>
<form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<h2>Add Patient Details</h2>
	<input type="text" name="patient_id" placeholder="PATIENT ID" required><br><br>
	<input type="number" min="0" name="height" style="width:49%;" placeholder="HEIGHT(IN FEETS)" required>
	<input type="number" min="0" name="weight" style="width:49%;" placeholder="WEIGHT(IN POUNDS)" required><br><br>
	<input type="number" min="0" name="bp1" id="bp"  style="width:48%;" placeholder="HIGHER BP" required>
	<h3 style="display:inline;">/</h3>
	<input type="number" min="0" name="bp2" id="bp" style="width:48%;" placeholder="LOWER BP" required><br><br>
	<input type="number" min="0" name="temperature" placeholder="TEMPERATURE(IN CELCIUS)" required><br>
	<input type="submit" name="Submit" class="submit" id="submit">
</form>
</div>
</div>
</body>
</html>
