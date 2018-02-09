<!DOCTYPE html>
<html>
<head>
    <title>Add a Patient</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
    <link rel="stylesheet" type="text/css" href="../../stylesheets/boot/css/bootstrap.min.css">
    <script src="../../stylesheets/boot/js/bootstrap.min.js"></script>
    <script src="../../stylesheets/boot/jquery.js"></script>
</head>
<body>
<?php include("../../controller/validation/patient_image.php");?>
<div class="login-page">
<div class="form">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
    <input type="text" name="patient_id" placeholder="PATIENT ID" required><br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" id="submit" value="Upload Image" name="upload">
</form>
</div>
</div>


</body>
</html>