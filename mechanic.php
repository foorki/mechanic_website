<?php
  require("include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mechanic | QAF</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
	<link rel="stylesheet" type="text/css" href="css/mechanic.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<!-- <script type="text/javascript" src="js/date-time.js"></script> -->
	<style>
		#map{
			height: 338px;
		}
	</style>
</head>
<body>
	<?php include 'include/header.php'; ?>
	<div class="book-container">
		<div class="Qub-booking">
			<div class="booking-tab" >
				<span class="tab-button" id="tab-c"><a href="#" class="links tab tab-active" onclick="bookMood(1);"> Urgent</a></span>
				<span class="tab-button" id="tab-o"><a href="#" class="links tab" onclick="bookMood(2);">later</a></span>
				
			</div>


			<form method="POST" action="mechanic_script.php" name="booking-cab">
				<div class="booking-fields">
					<div class="card">
						<div class="row">
							<div class="left">
								<label for="from">Current location</label>
							</div>
							<div class="right">
								<input type="text" name="current_location" id="from" placeholder="Source" onclick="getLocation();">
							</div>
						</div>
					</div>
					

			<div class="service">
				<div class="col-md-6 ">
                <label for="inputSelect4" class="form-label">Select Service</label>
                <select class="form-select" name="service" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Tuning</option>
                    <option value="2">Service</option>
                    <option value="3">Engine</option>
                </select>
           		 </div>	
			</div>

			<div class="card-when hide">
						<div class="row">
							<div class="left">
								<label for="when">When</label>
							</div>
							<div class="right">
								<select id="when" name="date">
									<option value="10">Now</option>
									<option value="11">Schedule for later</option>
								</select>
							</div>
						</div>
					</div>

					</div>
					<div class="card submit hide">
						<div class="row mx-4" style="padding: 10px 5px;">
							<input class="btn btn-primary bg-primary" type="submit" value="Book Now">
						</div>
					</div>

				</div>
			</form>

		</div>
	</div>

    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>



	<?php 
	include 'include/footer.php'; 
	?>
	<!-- <script type="text/javascript" src="js/.js"></script> -->
	<script type="text/javascript" src="js/mechanic.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVr_QI5v7Lsrb7WTXEiTNWeubdYUHK7VE&libraries=places&callback=getLocation"
        async defer></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>
</html>
