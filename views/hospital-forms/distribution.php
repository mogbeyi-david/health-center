<?php include("../../controller/validation/validate_new_patient.php"); ?>
<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
  <title>Disease Distribution</title>
</head>
<body>
  <div class="login-page">
  <div class="form">
  <form class="login-form" method="post" action="../../controller/actions/disease_distribution.php">
    <select name="disease" style="width: 100%">
      <option value="disease">View By Disease</option>;
      <option value="gender">View By Gender</option>;
    </select>
    <input type="submit" name="submit" id="submit">
  </form>
</div>
</div>
</body>
</html>
