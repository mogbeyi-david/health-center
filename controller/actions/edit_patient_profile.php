<?php
    include("../../model/database/server.php");
    if(isset($_GET['id']))
    {
        $id = $_GET["id"];
        $query = "SELECT * FROM patients WHERE patient_id = '$id'";
        $result = mysqli_query($connection , $query);
        $row = $result->fetch_assoc();
        $number_of_rows = count($row);

    }


?>
<?php include("../../controller/validation/validate_new_patient.php"); ?>
<?php include("../../controller/actions/update_patient_profile.php"); ?>
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
<div class="login-page">
    <div class="form">
        <form class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <h2 style="text-align: center; color: white;">Update Patient Details</h2>
            <input type="text" PLACEHOLDER="PATIENT ID" name="patient_id" id="update_a_patient_profile" value="<?php if(isset($row)){print ($row["patient_id"]);} ?>" readonly><br><br>
            <input type="text" name="firstname" style="width:49%;" placeholder="FIRSTNAME" value="<?php if(isset($row)){print($row["firstname"]);} ?>" required><span><?php print($firstname_err);?></span>
            <input type="text" name="lastname" style="width:49%;" placeholder="LASTNAME" value="<?php if(isset($row)){print($row["lastname"]);} ?>" required><span><?php print($lastname_err);?></span><br><br>
            <select name="gender" class="list" style="width:33%; border-radius: 0px;">
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
                <option value="Ambiguous">AMBIGUOUS</option>
            </select>
            <input type="text" class="age" name="age" style="width:32%"   placeholder="AGE" value="<?php if(isset($row)){print($row["age"]);} ?>" required><span><?php print($age_err);?></span>
            <select name="units" id="units" style="width:32%; border-radius: 0px;" class="list">
                <?php
                if($row['units'] == 'seconds'){
                    print "<option value=\"minutes\">MINUTES</option>";
                    print "<option value=\"hours\">HOURS</option>";
                    print "<option value=\"days\">DAYS</option>";
                    print "<option value=\"months\">MONTHS</option>";
                    print "<option value=\"years\">YEARS</option>";
                }else if($row['units'] == 'minutes'){
                    print "<option value=\"seconds\">SECONDS</option>";
                    print "<option value=\"minutes\" selected>MINUTES</option>";
                    print "<option value=\"hours\">HOURS</option>";
                    print "<option value=\"days\">DAYS</option>";
                    print "<option value=\"months\">MONTHS</option>";
                    print "<option value=\"years\">YEARS</option>";
                }else if($row['units'] == 'hours'){
                    print "<option value=\"seconds\">SECONDS</option>";
                    print "<option value=\"minutes\">MINUTES</option>";
                    print "<option value=\"hours\" selected>HOURS</option>";
                    print "<option value=\"days\">DAYS</option>";
                    print "<option value=\"months\">MONTHS</option>";
                    print "<option value=\"years\">YEARS</option>";
                }else if($row['units'] == 'days'){
                    print "<option value=\"seconds\">SECONDS</option>";
                    print "<option value=\"minutes\">MINUTES</option>";
                    print "<option value=\"hours\">HOURS</option>";
                    print "<option value=\"days\" selected>DAYS</option>";
                    print "<option value=\"months\">MONTHS</option>";
                    print "<option value=\"years\">YEARS</option>";
                }else if($row['units'] == 'months'){
                    print "<option value=\"seconds\">SECONDS</option>";
                    print "<option value=\"minutes\">MINUTES</option>";
                    print "<option value=\"hours\">HOURS</option>";
                    print "<option value=\"days\">DAYS</option>";
                    print "<option value=\"months\" selected>MONTHS</option>";
                    print "<option value=\"years\">YEARS</option>";
                }else{
                    print "<option value=\"seconds\">SECONDS</option>";
                    print "<option value=\"minutes\">MINUTES</option>";
                    print "<option value=\"hours\">HOURS</option>";
                    print "<option value=\"days\">DAYS</option>";
                    print "<option value=\"months\">MONTHS</option>";
                    print "<option value=\"years\" selected>YEARS</option>";
                }
                ?>
            </select><br><br>
            <input type="text" placeholder="GUARDIAN NAME" style="width:49%;" name="parent_name" value="<?php if(isset($row)){print($row["parent_name"]);} ?>" required><span><?php print($parent_name_err);?></span>
            <input type="email" placeholder="GUARDIAN EMAIL" style="width:49%;" name="email" value="<?php if(isset($row)){print($row["email"]);} ?>" required><span><?php print($email_err);?></span><br><br>
            <input type="text" name="parent_no" style="width:49%;" placeholder="CONTACT" value="<?php if(isset($row)){print($row["parent_number"]);} ?>" required><span><?php print($parent_no_err);?></span>
            <select name="marital_status" style="width:49%; border-radius: 0px;" class="list">
                <?php
                if($row['marital_status'] == 'single'){
                    print "<option value=\"single\">SINGLE</option>";
                    print "<option value=\"married\">MARRIED</option>";
                    print "<option value=\"divorced\">DIVORCED</option>";
                    print "<option value=\"seperated\">SEPERATED</option>";
                }else if($row['marital_status'] == 'divorced'){
                    print "<option value=\"single\">SINGLE</option>";
                    print "<option value=\"married\">MARRIED</option>";
                    print "<option value=\"divorced\" selected>DIVORCED</option>";
                    print "<option value=\"seperated\">SEPERATED</option>";
                }else if($row['marital_status'] == 'married'){
                    print "<option value=\"single\">SINGLE</option>";
                    print "<option value=\"married\" selected>MARRIED</option>";
                    print "<option value=\"divorced\">DIVORCED</option>";
                    print "<option value=\"seperated\">SEPERATED</option>";
                }else{
                    print "<option value=\"single\">SINGLE</option>";
                    print "<option value=\"married\">MARRIED</option>";
                    print "<option value=\"divorced\">DIVORCED</option>";
                    print "<option value=\"seperated\" selected>SEPERATED</option>";
                }
                ?>
            </select><br><br>
            <select name="city" style="width:49%; border-radius: 0px;" class="list">
                <?php
                if($row['city'] == 'Oyo State'){
                    print "<option value=\"Oyo State\" selected>Oyo State</option>";
                    print "<option value=\"Ogun State\">Ogun State</option>";
                    print "<option value=\"Lagos State\">Lagos State</option>";
                    print "<option value=\"Osun State\">Osun State</option>";
                    print "<option value=\"Ekiti State\">Ekiti State</option>";
                }elseif($row['city'] == 'Ogun State'){
                    print "<option value=\"Oyo State\" selected>Oyo State</option>";
                    print "<option value=\"Ogun State\" selected>Ogun State</option>";
                    print "<option value=\"Lagos State\">Lagos State</option>";
                    print "<option value=\"Osun State\">Osun State</option>";
                    print "<option value=\"Ekiti State\">Ekiti State</option>";
                }elseif($row['city'] == 'Lagos State'){
                    print "<option value=\"Oyo State\" selected>Oyo State</option>";
                    print "<option value=\"Ogun State\">Ogun State</option>";
                    print "<option value=\"Lagos State\" selected>Lagos State</option>";
                    print "<option value=\"Osun State\">Osun State</option>";
                    print "<option value=\"Ekiti State\">Ekiti State</option>";
                }elseif($row['city'] == 'Osun State'){
                    print "<option value=\"Oyo State\" selected>Oyo State</option>";
                    print "<option value=\"Ogun State\">Ogun State</option>";
                    print "<option value=\"Lagos State\">Lagos State</option>";
                    print "<option value=\"Osun State\" selected>Osun State</option>";
                    print "<option value=\"Ekiti State\">Ekiti State</option>";
                }else{
                    print "<option value=\"Oyo State\" selected>Oyo State</option>";
                    print "<option value=\"Ogun State\">Ogun State</option>";
                    print "<option value=\"Lagos State\">Lagos State</option>";
                    print "<option value=\"Osun State\">Osun State</option>";
                    print "<option value=\"Ekiti State\" selected>Ekiti State</option>";
                }
                ?>
            </select>
            <select name="local_govt" style="width:49%; border-radius: 0px;" class="list">
                <?php
                print "<option>LOCAL GOVERNMENT</option>";
                $query = "SELECT local_name FROM locals";
                $result = mysqli_query($connection , $query);
                if($result){
                    $rows = mysqli_fetch_all($result);
                    foreach($rows as $row){
                        print "<pre>";
                        print("<option value=$row[0]>".$row[0]."</option>");
                        print "</pre>";
                    }
                }else{
                    print "";
                }
                ?>
            </select><br><br>
            <input type="submit" name="update" id="submit" value="UPDATE">
        </form>

    </div>
</div>
</body>
</html>

