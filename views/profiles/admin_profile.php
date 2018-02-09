<?php
session_start();
include("../includes/header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADMINISTRATION</title>
	<link rel="stylesheet" type="text/css" href="../../stylesheets/profile.css">
	<script>

		function new_doctor()
		{
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../forms/register.php' , true);
			request.send();
		}

		function new_nurse()
		{
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../forms/new_nurse.php' , true);
			request.send();
		}

		function view_all_staff()
		{
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../../model/DBquery/view_all_staff.php' , true);
			request.send();
		}

		function view_all_patients()
		{
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../../model/DBquery/view_all_patients.php' , true);
			request.send();
		}

		function delete_staff()
		{
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../hospital-forms/delete_staff.php' , true);
			request.send();
		}

		function edit_profile()
		{
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../forms/update_profile.php' , true);
			request.send();
		}

		function view_all_messages()
		{
			var request = new XMLHttpRequest();
			request.onreadystatechange = function()
			{
				if(request.readyState == 4 && request.status == 200)
				{
					document.getElementById('chat').innerHTML = request.responseText;
				}
			}
			request.open('GET' , '../../model/DBquery/view_all_messages.php' , true);
			request.send();
		}

	</script>
</head>
<body>
<div>
	<div class="row">
		<div class="col-md-3">
			<?php
			include 'admin_nav.php';
			?>
		</div>
		<div class="col-md-8" id="chat">
			<?php
				if(isset($_SESSION["message_add_new_doctor"])){
					print $_SESSION["message_add_new_doctor"];
					$_SESSION["message_add_new_doctor"] = "";
				}else{
					print "";
				}

			if(isset($_SESSION["message_add_new_nurse"])){
				print $_SESSION["message_add_new_nurse"];
				$_SESSION["message_add_new_nurse"] = "";
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
