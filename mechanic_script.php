<?php
require("include/config.php");

if (!isset($_SESSION['email'])){
	header('location: login.php');
}

$current_loc = $_POST['current_location'];
$current_loc = mysqli_real_escape_string($con, $current_loc);

$to = $_POST['service'];
$to = mysqli_real_escape_string($con, $to);

$when = $_POST['date'];
$when = mysqli_real_escape_string($con, $when);

// if($when == 10){
// 	$when = "Now";
// 	$date = new DateTime('now', new DateTimeZone('Asia/Karachi'));
// 	$depart_day = $date->format('M d, Y');
// 	$depart_time = $date->format('g:i a');       //h:i
// }
// else{
// 	$when ="Later";
// 	$depart_day = $_POST['Depart-day'];
// 	$depart_day = mysqli_real_escape_string($con, $depart_day);
// 	$depart_time = $_POST['Depart-time'];
// 	$depart_time = mysqli_real_escape_string($con, $depart_time);
// 	$depart_time = date("g:i a", strtotime($depart_time));
// }

$query = "INSERT INTO user_booking(user_id,current_loc, service, date,status)VALUES('" . $_SESSION['user_id'] . "','"  . $current_loc . "','"  . $to . "','" . $when . "','" ."Confirmed". "')";
mysqli_query($con, $query) or die(mysqli_error($con));

	header('location: success.php');



?>
