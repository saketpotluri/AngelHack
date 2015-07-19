<html>
	<head>
		<title> BulkBuy </title>
		<script src = "main.js"> </script>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div id = "header"> 
			<img src = "logo.png" alt = "logo"> 
		</div>
	<body>
		<form action = "register.php" method = "post"> 
			<fieldset>
			   <?php
			   		if(isset($_GET['duplicate'])) {
			   			echo "UserName is not available, please try something new";
			   		}
			   ?>
				<label> Enter your user name: <input type = "text" id = "user" name = "user" /> </label> <br>
				<label> Enter your password: <input type = "password" id = "pass" name = "pass" /> </label> <br>
				<label> Renter your password: <input type = "password" id = "pass2" name = "pass2" /> </label> <br>
				<label> Enter your full name <input type = "text" id = "name" name = "name" /> </label> <br>
				<label> Enter your email address: <input type = "text" id = "email" name = "email" /> </label>
				<input type = "submit">
			</fieldset>

			<div style = "visibility: hidden" id = "Error"> 
				<p> Passwords do not match! </p>
			</div>

		</form>
	</body>
</html>
