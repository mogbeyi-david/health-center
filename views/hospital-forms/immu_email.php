<?php include("header.php"); ?>
<html>
<head>
  <title>EMAIL</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/new_disease.css">
</head>
<body>
  <form class="form" action="send_mail.php" method="post">
  Choose the imunization:
  <select name="diseases" class="diseases">
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
  Enter the date:<input type="date" name="date" required><br><br>
  <input id="submit" type="submit" name="submit">
</body>
</html>
