<?php 
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	$loggedin = FALSE;
?>
<html> 
	<head>
		<title> BulkBuy </title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<?php 
		if(isset($_GET["successful"])) {
			$loggedin = TRUE;
			session_start();
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

		<div class = "column" id = "columnleft">
			<div class = "item"> 
				<?php 
					if($loggedin) {
				?> 
					<p> Welcome <?= $_SESSION["UserName"]; ?> </p>
					<a href = "registercampaign.php"> <img id = "campaign" src = "campaign.png" alt = campaign /> </a>
				<?php } else {
					echo "Our product is a web interface that allows customers to buy products they want from a website called DealBreak. Customers are allowed to choose any of the products listed there. The price of a product is handled in the following way: as more customers buy that product, its price decreases.
	The overall layout of the website consists of four web pages: the first one is used for registration, the second for login, the third for containing the actual products listed, and the final one for containing a list of list of the transactions made and the receipt. The registration process consists of providing the individual's name, username, password, email. 
	Php and html - css are the main languages used to develop the user interface for the website. A database created in SQL is used to store information such as the usernames/passwords entered. This way, no duplicate accounts can be created, and when signing in, the password is correctly matched up with the username.";
					}
				?>
			</div>
		</div>

		<div class = "column" id = "columnright">
			<div class = "item">
				<?php if(!$loggedin) { ?>
					Please sign in or register using the links above to get started. 
			<?php } else { ?>
					<p> Soon Ending Campaigns </p>

			<?php	
					$db = new PDO("mysql:dbname=emp;host=localhost;charset=utf8", "root", "root");
					$rows = $db -> query("SELECT PRODUCT, PRICE, AMOUNT_TO_SELL, CURRENT_SALES, DESCRIPTION, ID, MAX_DISCOUNT_RATE, CURRENT_DISCOUNT, START_DATE, END_DATE
						from campaigns
						ORDER BY END_DATE ASC");
					if($rows->rowCount > 0) {
						foreach($rows as $row) {
							$Price = $row["PRICE"]*(1-$row["CURRENT_DISCOUNT"]);
							echo "Product: ".$row["PRODUCT"]. " Price: ".$Price. " End Date: ".$row["END_DATE"];
							echo "<br>";
						}
					}
			} ?>
			</div>
		</div>
	</body>
</html>
