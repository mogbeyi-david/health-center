<!DOCTYPE html>
<html>
<head>
  	<link rel="stylesheet" type="text/css" href="../../stylesheets/register.css" >
</head>
<body>
    <div class="login-page">
        <div class="form">
            <?php include_once("../../controller/actions/store_prescription.php"); ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="login-form">
                <input type="text" name="patient_id" placeholder="PATIENT ID" required><br><br>
                <input type="date" name="datestamp" value="<?php echo date("Y-m-d");?>" readonly required><br><br>
                <input type="text" name="timestamp" value="<?php echo date("h:i:sa");?>" readonly required><br><br>
                <select name="diagnosis" style="width: 100%; border-radius: 0px;">
                    <option value="#">SELECT DISEASE</option>
                    <option value="No Diagnosis">NO DIAGNOSIS</option>
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
                <textarea style="width: 100%; height: 100px;" name="comments" placeholder="ANALYSIS AND DESCRIPTION"></textarea><br><br>

                <h4 style="color: white; ">Admission Status</h4>
                <h5 style="color: white; display: inline">Not Admitted</h5><input style="width:10%;" type="radio" name="admission_status" value="Not Admitted" checked>
                <h5 style="color: white; display: inline">Admitted</h5><input style="width:10%;" type="radio" name="admission_status" value="Admitted"><br><br>
                <h4 style="color: white; display: inline">Admission Date</h4><input style="width: 78%;" type="date" name="admission_date" placeholder="DATE ADMITTED">


                <h4 style="color: white">Discharge Status</h4>
                <h5 style="color: white; display: inline">Not Admitted</h5><input style="width:10%;" type="radio" name="discharge_status" value="Not Admitted" checked>
                <h5 style="color:white; display: inline">Still Admitted</h5><input style="width:10%;" type="radio" name="discharge_status" value="Still Admitted" onclick="document.getElementById('discharge').innerHTML ='';">
                <h5 style="color:white; display: inline">Discharged</h5><input style="width:10%;" type="radio" name="discharge_status" value="Discharged"><br><br>
                <h4 style="color: white; display: inline">Discharge Date</h4><input style="width: 78%;" type="date" name="discharge_date">
                <br>

                <h4 style="color: white">Drug Prescription</h4>
                <input type="text" name="drug_prescription" placeholder="DRUGS PRESCRIPTION" size="50" style="width:100%">
                <input type="text" name="drug_dosage"  placeholder="DRUG DOSAGE" style="width:83%"><h4 style="color: white; display: inline;">To Be Taken</h4>
                <input type="text" name="drug_duration" placeholder="DRUG DURATION" style="width:84%"><h4 style="color: white; display: inline;">Times Daily</h4><br>

                <h4 style="color: white">Injection Prescription</h4>
                <input type="text" name="injection_prescription" placeholder="INJECTION PRESCRIPTION" size="50" style="width:100%">
                <input type="text" name="injection_dosage"  placeholder="INJECTION DOSAGE" style="width:83%"><h4 style="color: white; display: inline;">To Be Taken</h4>
                <input type="text" name="injection_duration" placeholder="INJECTION DURATION" style="width:84%"><h4 style="color: white; display: inline;">Times Daily</h4><br>

                <h4 style="color: white">Drip Prescription</h4>
                <input type="text" name="drip_prescription" placeholder="DRIP PRESCRIPTION" size="50" style="width:100%">
                <input type="text" name="drip_dosage"  placeholder="DRIP DOSAGE" style="width:83%"><h4 style="color: white; display: inline;">To Be Taken</h4>
                <input type="text" name="drip_duration" placeholder="DRIP DURATION" style="width:84%"><h4 style="color: white; display: inline;">Times Daily</h4><br>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
</body>
</html>
