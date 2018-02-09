<?php include("../../controller/validation/validate_new_patient.php"); ?>
<?php include("../includes/header.php"); ?>
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
                <option>View By Disease</option>;
            </select>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</div>
</body>
</html>
