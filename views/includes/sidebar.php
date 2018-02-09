<?php
include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DOCTORS PAGE</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/profile.css">
</head>
<script>
    function prescription()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../hospital-forms/prescription.php' , true);
        request.send();
    }

    function consultation()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../../controller/action/consultation.php' , true);
        request.send();
    }

    function lab_test_results()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../../model/DBquery/view_all_lab_test_results.php' , true);
        request.send();
    }

    function medical_records()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../hospital-forms/medical_history.php' , true);
        request.send();
    }

    function in_patient_details()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../../controller/actions/in_patient.php' , true);
        request.send();
    }

    function manage_shifts()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../../controller/actions/manage_shift.php' , true);
        request.send();
    }

    function disease_distribution()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../hospital-forms/distribution.php' , true);
        request.send();
    }

    function edit_profile()
    {
        var request = new XMLHttpRequest();

        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200)
            {
                document.getElementById('chat').innerHTML = request.responseText;
            }
        }
        request.open('GET' , '../forms/update_profile.php' , true);
        request.send();
    }
</script>
<body>

<div>
    <div class="row">
        <div class="col-md-3">
            <?php
            include '../profiles/admin_doc.php';
            ?>
        </div>
        <div class="col-md-8" id="chat">
            <?php
            if(isset($_SESSION["message_store_prescription"])){
                print ($_SESSION["message_store_prescription"]);
                $_SESSION["message_store_prescription"] = "";
            }else{
                print "";
            }

            if(isset($_SESSION["id_does_not_exist"])){
                print ($_SESSION["id_does_not_exist"]);
                $_SESSION["id_does_not_exist"] = "";
            }else{
                print "";
            }

            if(isset($_SESSION['wrong_password'])){
                print $_SESSION['wrong_password'];
                $_SESSION['wrong_password'] = "";
            }else{
                print "";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
