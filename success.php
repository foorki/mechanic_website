<?php
require("include/config.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Success | Wedrive</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/success.css">
</head>
<body>
	<?php include 'include/header.php'; ?>
	<div class="s-container">
		<div class="s-img">
			<img id="confirm" src="img/svg/success.svg">
		</div>
		<div class="s-jumbotron">
			<div class="heading">
				<h2  align="center">Thank you for booking a mechanic, we will contact you soon</h2>
			</div>
            <p align="center">Click <a href="mechanic.php">here</a> to another booking</p>
		</div>
	</div>

	<?php include 'include/footer.php'; ?>
	<script type="text/javascript" src="js/navbar.js"></script>
</body>
</html>
