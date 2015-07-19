<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	$loggedin = FALSE;
	session_start();

?>

<html>
	<head>
		<title> BulkBuy </title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<?php 
		if(isset($_SESSION["Name"])) {
			$loggedin = TRUE;
		} 
	?>
	<body>
		<div id = "header"> 
			<img src = "logo.png" alt = "logo"> 
			<?php if($loggedin) { ?>
				<a href = "logout.php"> <img class = "button" src = "http://4.bp.blogspot.com/-V4UiHRvdqH4/UuuUKu2Dq4I/AAAAAAAAA4g/y7TJV0WQbgA/s1600/sitemgr_logout-button-blue-md.png" alt = "logout"> </a>
			<?php } else { ?>
				<a href = "dologin.php"> <img class = "button" src = "http://www.clker.com/cliparts/U/4/w/1/q/s/login-button-blue-hi.png" alt = "login"> </a>
			    <a href = "form.php"> <img class = "button" src = "http://www.clker.com/cliparts/j/Z/J/9/s/f/register-button-blue-hi.png" alt = "login"> </a>
		    <?php } ?>
		</div>



