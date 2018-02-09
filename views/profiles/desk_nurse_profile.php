<?php
session_start();
include("../includes/header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NURSES PAGE</title>
    <link rel="stylesheet" type="text/css" href="../../stylesheets/profile.css">
    <script>
        function new_patient()
        {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function()
            {
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../hospital-forms/new_patient.php' , true);
            request.send();
        }

        function add_a_new_patient()
        {
            var request = new XMLHttpRequest();
            request.onreadystatechange = function()
            {
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../hospital-forms/new_patient.php' , true);
            request.send();
        }



        function delete_a_patient()
        {
            var request = new XMLHttpRequest();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../hospital-forms/delete_a_patient.php' , true);
            request.send();
        }

        function update_patient_profile()
        {
            submit = document.getElementById("submit").value;
            id=document.getElementById("update_a_patient_profile").value;
            data = [submit , id];
            var request = new XMLHttpRequest();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../../controller/actions/update_patient_profile.php?array='+submit , true);
            request.send();
        }

        function upload()
        {
            var request = new XMLHttpRequest();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../hospital-forms/patient_image.php' , true);
            request.send();
        }

        function view_all_patients()
        {
            var request = new XMLHttpRequest();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../../model/DBquery/view_all_patients.php' , true);
            request.send();
        }

        function edit_patient_profile()
        {
            var request = new XMLHttpRequest();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../hospital-forms/edit_patient_profile.php' , true);
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

        function editer()
        {
            id  = document.getElementById("edit_patient_profile_id").value;
            var request = new XMLHttpRequest();

            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200)
                {
                    document.getElementById('chat').innerHTML = request.responseText;
                }
            }
            request.open('GET' , '../../controller/actions/edit_patient_profile.php?id='+id , true);
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

</head>
<body>
<div>
    <div class="row">
        <div class="col-md-3">
            <?php
            include 'desk_nurse_nav.php';
            ?>
        </div>
        <div class="col-md-8" id="chat">
            <?php
            if(isset($_SESSION["message_add_new_patient"])){

                print_r($_SESSION["message_add_new_patient"]);

                $_SESSION["message_add_new_patient"] = "";
            }else{
                    print ("");
            }

            if(isset($_SESSION["message_edit_patient_details"])){
                print_r($_SESSION["message_edit_patient_details"]);
                $_SESSION["message_edit_patient_details"] = "";
            }else{
                print ("");
            }

            if(isset($_SESSION["message_delete_a_patient"])){
                print_r($_SESSION["message_delete_a_patient"]);
                $_SESSION["message_delete_a_patient"] = "";
            }else{
                print "";
            }

            if(isset($_SESSION["message_delete_a_patient"])){
                print_r($_SESSION["message_delete_a_patient"]);
                $_SESSION["message_delete_a_patient"] = "";
            }else{
                print "";
            }

            if(isset($_SESSION['wrong_password'])){
                print $_SESSION['wrong_password'];
                $_SESSION['wrong_password'] = "";
            }else{
                print "";
            }

            if(isset( $_SESSION['picture_message'])){
                print  $_SESSION['picture_message'];
                $_SESSION['picture_message'] = "";
            }else{
                print "";
            }

            if(isset($_SESSION["id_does_not_exist"])){
                print ($_SESSION["id_does_not_exist"]);
                $_SESSION["id_does_not_exist"] = "";
            }else{
                print "";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
