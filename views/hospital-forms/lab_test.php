<html>
<head>
    <title>Add a Patient</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/register.css">
    <link rel="stylesheet" type="text/css" href="../../stylesheets/boot/css/bootstrap.min.css">
    <script src="../../stylesheets/boot/js/bootstrap.min.js"></script>
    <script src="../../stylesheets/boot/jquery.js"></script>
</head>
<?php include("../../controller/actions/lab_test.php"); ?>
<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form"  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <h2 style="color: white">Lab Test Form</h2>
                <input type="text" name="patient_id" placeholder="PATIENT ID" required><br><br>
                <h4 style="display: inline; color: white;">Type of Test</h4>:
                <select name="disease" style="width: 82%; border-radius: 0px;">
                    <option value="#">--SELECT DISEASE--</option>
                    <option value="malaria">Malaria</option>
                    <option value="cold">Cold</option>
                    <option value="hypertension">Hypertension</option>
                    <option value="cholera">Cholera</option>
                    <option value="diarrhoea">Diarrhoea</option>
                    <option value="hiv/aids">HIV/AIDS</option>
                    <option value="typhoid fever">Typhoid Fever</option>
                    <option value="lassa fever">Lassa Fever</option>
                    <option value="rabies">Rabies</option>
                    <option value="headache">Headache</option>
                    <option value="wounds">Wounds</option>
                    <option value="cuts">Cut</option>
                    <option value="cough">Cough</option>
                    <option value="whooping cough">Whooping Cough</option>
                    <option value="ring worm">Ring Worm</option>
                    <option value="rashes">Rashes</option>
                    <option value="stooling and vomitting">Stooling and Vomitting</option>
                    <option value="stomach pain">Stomach Pain</option>
                    <option value="toothache">Tooth-Ache</option>
                    <option value="athritis">Athritis</option>
                    <option value="mai-nutrition">Mal-Nutrition</option>
                    <option value="kwarshiorko">Kwarshiorko</option>
                    <option value="swellings">Swelings</option>
                    <option value="disbetis">Diabetis</option>
                    <option value="tuberculosis">Tuberculosis</option>
                    <option value="meningitis">Meningitis</option>
                    <option value="gonorrhea">Gonorrhea</option>
                    <option value="syphillis">Syphillis</option>
                </select><br><br>
                <input type="text" name="date" value="<?php echo date("Y-m-d"); ?>" readonly><br><br>
                <input type="text" name="name_of_nurse" placeholder="NURSE NAME" value="<?php print $_SESSION['firstname'] . " " . $_SESSION["lastname"] ?> " required><br><br>
                <textarea name="analysis" rows="8" cols="20" PLACEHOLDER="ANALYSIS AND RESULTS" required></textarea><br><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
</body>
</html>
