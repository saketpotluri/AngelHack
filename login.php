<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);

	$user = $_POST["user"];
	$pass = $_POST["pass"];

	$db = new PDO("mysql:dbname=emp;host=localhost;charset=utf8", "root", "root"); 
	$rows = $db -> query("SELECT UserName, Name from angel WHERE UserName = '$user' AND Password = '$pass' LIMIT 0, 1");


	if(!$rows->rowCount() > 0) {
		header("Location: dologin.php?invalid=true");
	} else {

		foreach($rows as $row) {
			session_start();
			echo($row);
			$_SESSION["name"] = $row["Name"];
			$_SESSION["UserName"] = $row["UserName"];
			header("Location: index.php?successful=true");
			//}
		}
	}
?>


