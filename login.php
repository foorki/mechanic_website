<?php
  require("include/config.php");

if (isset($_SESSION['email'])) {
    header('location: user.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Wedrive</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php include 'include/header.php'; ?>

	<div class="login">
		<div class="login-content">
			<div class="logo-l">
				<a href="index.php" style="text-decoration: none;" class="brand"><strong>QAF</strong></a>
			</div>
			<div class="form-heading">
				<h3>Sign in</h3>
			</div>
			<form action="login_script.php" method="POST">
				<label for="email">Email</label><br>
				<input type="email" name="Email" id="email" placeholder="Email" required="">

				<label for="password">Password</label><br>
				<input type="password" name="Password" id="password" placeholder="Password" pattern=".{6,}" required="">
				<span><a href="signup.php">Create account</a></span>
				<input type="submit" name="Submit" value="Login" onclick="">
				<?php
                if (isset($_SESSION['error']))
                {
                	echo $_SESSION['error'];
                }
                ?>
			</form>
		</div>

	</div>

	<?php include 'include/footer.php'; ?>

	<script type="text/javascript" src="js/header.js"></script>
</body>
</html>
