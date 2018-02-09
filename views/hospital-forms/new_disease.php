<?php include("../includes/header.php"); ?>
<?php include("../../controller/actions/add_disease.php"); ?>
<?php include("../../controller/actions/update_disease.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>NEW DISEASE CASE</title>
	<link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
	<script>
	function admission()
	{
		document.getElementById('discharge').innerHTML ="<h4>Discharge Date</h4> <input type='date' name='admission_status' required>";
	}
	</script>
</head>
<body>
<div class="login-page">
<div class="form">
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="login-form">
<input type="text" name="patient_id" value="<?php echo $from_doctor['patient_id']; ?>" readonly required><br><br>
	<input type="date" name="date" value="<?php echo date("Y-m-d");?>" readonly><br><br>
<input type="text" class="disease" name="disease" value="<?php echo $from_doctor['disease']; ?>" readonly><br><br>
<h3 style="color: white">Date Admitted</h3>
 <input type="date" name="date_admitted" placeholder="DATE ADMITTED">
	<h3 style="color: white">Discharge Status</h3>
	<input style="width:10%;" type="radio" name="admission_status" value="Not Admitted" onclick="document.getElementById('discharge').innerHTML ='';" checked>
	<h4 style="color:white; display: inline">Not Admitted</h4>
<input style="width:10%;" type="radio" name="admission_status" value="Still Admitted" onclick="document.getElementById('discharge').innerHTML ='';" checked>
	<h4 style="color:white; display: inline">Still Admitted</h4>

<input style="width:20%;" type="radio" name="admission_status" value="Discharged" onclick="admission();">
	<h4 style="color:white; display: inline">Discharged</h4>
<span id="discharge"></span>
	<br>
<input type="text" class="drugs" name="drugs" value="<?php echo $from_doctor['drugs']; ?>" readonly><br><br>
<input type="text" name="dosage"  placeholder="DRUG DOSAGE"><h3 style="color: white">To Be Taken</h3>
<input type="text" name="duration" placeholder="DURATION"><h3 style="color: white">Times Daily</h3><br>
<input type="submit" name="update" id="submit">
</form>
</div>
</div>
</body>
</html>
