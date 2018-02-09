<!doctype html>
<html>
<head>
  <title>Enter Id</title>
  <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
</head>
<body>
<div class="login-page">
<div class="form">
<form class="login-form" method="post" action="../hospital-forms/new_disease.php">
  PATIENT ID:<input type="text" name="patient_id" required><br><br>
  TODAY'S DATE:<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly><br><br>
  <input type="submit" id="submit" name="submit">
</form>
</div>
</div>
</body>
</html>
