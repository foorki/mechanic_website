<?php

require("include/config.php");

$email = $_POST['Email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['Password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);


$query = "SELECT * FROM user WHERE email='" . $email . "' AND pass='" . $password . "'";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0) {
  $_SESSION['error'] = "<span class='red'></br>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php?error=' . $_SESSION['error']);
} else {
  $row = mysqli_fetch_assoc($result);

  $_SESSION['fname'] = $row['fname'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: user.php');
}
?>
