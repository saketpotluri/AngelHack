<html>
	<head>
		<title> BulkBuy </title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div id = "header"> 
			<img src = "logo.png" alt = "logo"> 
		</div>
		<fieldset>
			<form action = "login.php" method = "POST">
			    <?php 
			    	if(isset($_GET["invalid"])) {
			    		echo "The password is invalid";
			    	}
			    ?>
				<label> Enter your user name: <input type = "text" id = "user" name = "user" /> </label> <br>
				<label> Enter your password: <input type = "password" id = "pass" name = "pass" /> </label> <br>
				<input type = "submit">
			</form>
		</fieldset>
	</body>
</html>
