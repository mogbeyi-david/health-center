<?php include("../../controller/validation/validate_new_patient.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add a Patient</title>
  <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
    <link rel="stylesheet" type="text/css" href="../../stylesheets/boot/css/bootstrap.min.css">
    <script src="../../stylesheets/boot/js/bootstrap.min.js"></script>
    <script src="../../stylesheets/boot/jquery.js"></script>
<!--    <script>-->
<!--        var state = document.getElementById('city').value;-->
<!--        var lga = document.getElementById('lga');-->
<!--        function LGA(){-->
<!--            alert('ss ');-->
<!--            var =  new XMLHttpRequest();-->
<!--            xxx.onreadystatechange= function(){-->
<!--                if(xxx.readyState ==4 && xxx.status == 200){-->
<!--                    lga.innerHTML= xxx.responseText;-->
<!--                }-->
<!--            };-->
<!--            xxx.open('GET','../../try.php?lga='+state,true);-->
<!--            xxx.send();-->
<!--        }-->
<!--    </script>-->
</head>

<body>

<div class="login-page">
<div class="form">
    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<input type="text" name="firstname" style="width:49%;"  placeholder="FIRSTNAME" value="<?php print($firstname);?>" required/><span><?php print($firstname_err);?></span>
<input type="text" name="lastname" style="width:49%;" placeholder="LASTNAME" value="<?php print($lastname);?>" required/><span><?php print($lastname_err);?></span><br><br>
<select name="gender" class="list" style="width:33%; border-radius: 0px;" >
    <option value="#">GENDER</option>
    <option value="male">MALE</option>
    <option value="female">FEMALE</option>
  </select>
<input type="number" min="0" max="30" class="age" name="age" style="width:32%; height:15px;"   placeholder="AGE" value="<?php print($age);?>" required><span><?php print($age_err);?></span>
<select name="units" id="units" style="width:32%; border-radius: 0px;" class="list">
	<option value="days">MINUTES</option>
	<option value="days">HOURS</option>
    <option value="days">DAYS</option>
    <option value="months">MONTHS</option>
    <option value="years">YEARS</option>
  </select><br><br>
    <select name="city" id="city" style="width:49%; border-radius: 0px;" class="list">
        <?php
            $query = "SELECT * FROM states";
            $result = mysqli_query($connection , $query);
            if($result){
                $rows = mysqli_fetch_all($result);
            }
            for($i=0 ; $i < count($rows) ; $i++){
                print "<option value=" . $rows[$i][0] . ">" . $rows[$i][1] . "</option>";
            }
        ?>

    </select>
    <select name="local_govt" style="width:49%; border-radius: 0px;" class="list">
        <?php

        ?>
    </select>
    <br><br>
<input type="text" placeholder="GUARDIAN NAME" style="width:49%;" name="parent_name" value="<?php print($parent_name);?>" required><span><?php print($parent_name_err);?></span>
<input type="email" placeholder="GUARDIAN EMAIL" style="width:49%;" name="email" value="<?php print($email);?>" required><span><?php print($email_err);?></span><br><br>
 <select name="marital_status" style="width:49%; border-radius: 0px;" class="list">
     <option value="#">MARITAL STATUS</option>
    <option value="single">SINGLE</option>
    <option value="married">MARRIED</option>
    <option value="divorced">DIVORCED</option>
    <option value="seperated">SEPERATED</option>
  </select>
    <select name="guardian_gender" class="list" style="width:49%; border-radius: 0px;">
        <option value="#">GUARDIAN GENDER</option>
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
    </select><br><br>
<input type="text" style="width: 49%;" name="parent_no" placeholder="CONTACT"  value="<?php print($parent_no);?>" required><span><?php print($parent_no_err);?></span>
<input type="text" style="width:49%;" name="address" placeholder="ADDRESS" value="<?php print($address);?>" required><span><?php print($address_err);?></span><br><br>
<input type="submit" id="submit" name="add_patient_to_database" value="ADD PATIENT">
</form>
</div>
</div>
</body>
</html>
