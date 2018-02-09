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
		function add_patient_details()
		{
			var request = new XMLHttpRequest();

			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../hospital-forms/add_patient_details.php' , true);
			request.send();
		}

		function prescription()
		{
			var request = new XMLHttpRequest();

			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../hospital-forms/nurse_medical_history.php' , true);
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

		function view_medical_records()
		{
			var request = new XMLHttpRequest();

			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../hospital-forms/nurse_medical_history.php' , true);
			request.send();
		}

		function immunization()
		{
			var request = new XMLHttpRequest();

			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../hospital-forms/immunization.php' , true);
			request.send();
		}

		function lab_test()
		{
			var request = new XMLHttpRequest();

			request.onreadystatechange = function(){
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../hospital-forms/lab_test.php' , true);
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
			include 'admin_nurse.php';
			?>
		</div>
		<div class="col-md-8" id="chat">
			<?php

				if(isset($_SESSION["message_add_patient_details"])){
					print $_SESSION["message_add_patient_details"];
					$_SESSION["message_add_patient_details"]="";
				}else{
					print "";
				}

				if(isset($_SESSION["message_lab_test_result"])){
					print($_SESSION["message_lab_test_result"]);
					$_SESSION["message_lab_test_result"] = "";
				}else{

				}
				if(isset($_SESSION["message_update_disease"])){
					print $_SESSION["message_update_disease"];
					$_SESSION["message_update_disease"] = "";
				}else{

				}

				if(isset($_SESSION["message_Immunization"])){
					print $_SESSION["message_Immunization"];
					$_SESSION["message_Immunization"] = "";
				}else{
					print "";
				}

			if(isset($_SESSION["id_does_not_exist"])){
				print $_SESSION["id_does_not_exist"];
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
