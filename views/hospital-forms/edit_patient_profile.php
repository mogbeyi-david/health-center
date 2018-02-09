<!doctype html>
<html>
<head>
    <title>Enter Id</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
    <style>
        th, td
        {
            padding: 8px;
            text-align: left;
            border: 1px solid black;
        }

        tr:hover
        {
            background-color:#f5f5f5;
        }
    </style>
</head>
<body>
<div class="login-page">
    <div class="form">
            <input type="text" name="id" id="edit_patient_profile_id" placeholder="ENTER PATIENT ID" required><br><br>
            <input type="submit" name="submit" id="submit" onclick="editer();">
    </div>
</div>
<?php
print "<br>";print "<br>";print "<br>";print "<br>";print "<br>";print "<br>";print "<br>";print "<br>";
?>
<?php
include("../../model/database/server.php");
include("../../controller/actions/edit_patient_profile.php");
?>
</body>
</html>

