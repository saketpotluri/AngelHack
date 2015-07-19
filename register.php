<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	if(!isset($_POST["user"]) || !isset($_POST["pass"]) || !isset($_POST["email"]) || !isset($_POST["name"])) {
		header("Location: form.html");
	}

	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$email = $_POST["email"];
	$name = $_POST["name"];

	$duplicate = FALSE;
	$db = new PDO("mysql:dbname=emp;host=localhost;charset=utf8", "root", "root"); 
	$rows = $db -> query("SELECT UserName FROM angel");

	foreach ($rows as $row) {
		if($row['UserName'] == $user) {
			$duplicate = TRUE;
			break;
		}
	}

	if($duplicate) {
		header("Location: form.php?duplicate=yes");
	}

	$db -> query("INSERT INTO angel VALUES('$user', '$pass', '$email', '$name')");
	session_start();
	$_SESSION["Name"] = $name;
	$_SESSION["UserName"] = $user;
	header("Location: index.php?successful=true");

?>
