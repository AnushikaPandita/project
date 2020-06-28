<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTRATION FORM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="normalise.css">
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
	<div class="login-box">
		<h1>Registration Form</h1>
		<form class="form" onsubmit="return validate()" action="first.html">

			<div class="input_Field"> 
   	    		<label>First Name :</label>
				<input placeholder="First Name" type="text" class="input">
			</div>
			<div class="input_Field">
				<label> Last Name :</label>
				<input placeholder="Last Name" type="text" class="input">
			</div>
   	    	<div class="input_Field"> 
   	    		<label>Password :</label>
				<input id="pass" type="password" placeholder="password" class="input">
			</div>
			<div class="input_Field">
				<label>Confirm password :</label>
				<input type="password" placeholder="Confirm password" class="input">
			</div>
			<div class="input_Field">
				<label>Gender:</label>
				<div class="custom_select">
					<select>
						<option value="">Select</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
			</div>
			<div class="input_Field">
				<label>Email Address :</label>
				<input id="user" type="text" placeholder="Email Address" class="input">
			</div>
			<div class="input_Field">
				<label>Phone Number :</label>
				<input id="user" type="text" placeholder="Phone Number" class="input">
			</div>
			<div class="input_Field">	
			<button class="btn" type="submit">Register</button>
		</form>
	</div>

<script type="text/javascript">
		function validate(event)
		{
			console.log("working")
			// event.preventDefault()
			var username = document.getElementById("user").value;
			var password = document.getElementById("pass").value;
			var errorUser = document.getElementById("errorUser").innerHTML="  ";
			var errorPass = document.getElementById("errorPass").innerHTML="  ";


			if(username.value.trim()== "")
			{
				errorUser.innerHTML = "PLEASE enter the valid username..!"
				return false;
			}
			else if(password.trim()== "")
			{
				errorPass.innerHTML = "PLEASE enter the valid Password..!"
				 return false;
			}
			else
			{
				return true;
			}
		}

	</script>
</body>
</html>