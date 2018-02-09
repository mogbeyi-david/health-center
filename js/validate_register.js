function check_name_length(first_id , second_id)
{
	string = document.getElementById(first_id).value
	if(string.length < 3)
	{
		document.getElementById(second_id).innerHTML="Name Should not be less than three characters";
	}
	else{
		document.getElementById(second_id).innerHTML="";
	}

}

function check_password_length(){
	var password = document.getElementById('password').value;
	if(password.length < 6)
	{
		document.getElementById('pword').innerHTML = "Password Should not be less than six(6) characters";
	}
	else
	{
		document.getElementById('pword').innerHTML = "";
	}	
}

function check_authentication(){
	var auth = document.getElementById("hac").value;
	var con_auth = document.getElementById("chac").value;
	if(auth != con_auth)
	{
		document.getElementById("auth").innerHTML = "The hospital identification codes do not match";
	}
	else
	{
		document.getElementById("auth").innerHTML="";
	}
}

function confirm_password(){
	var new_password = document.getElementById('new_password').value;
	var old_password = document.getElementById('old_password').value;
	if(old_password !== new_password){
		document.getElementById(new_pword).innerHTML = "Passwords Do Not Match";
	}
}