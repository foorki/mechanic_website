<?php
  require("include/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome | QAF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<body>
	<?php include 'include/header.php'; ?>
	
	<div id="carouselExampleCaptions" class="carousel slide">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/user.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcome to QAF mechanics</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque a quos accusamus!</p>
      </div>
    </div>
  </div>

  <div class="container">
    <h1>Your booking</h1>
  </div>
  <div class="container px-5">
    Oops not booked yet! Need Help? Book a Ride
  </div>
  <div class="t-container">
		<div class="section-heading" style="padding-left: 0;">
			<h2 class="section-title">Your Bookings</h2>
		</div>
		<div class="t-row">
			<?php
			$user_id = $_SESSION['user_id'];
			$query = "SELECT user_booking.current_loc AS current_loc, user_booking.service AS service, user_booking.date AS date, user_booking.status AS Status FROM user_booking WHERE user_booking.user_id='$user_id' and status='Confirmed'";
			$result = mysqli_query($con, $query)or die($mysqli_error($con));
			if (mysqli_num_rows($result) >= 1) {
			?>
			<table>
				<thead>
					<tr>
						<th>Current location</th>
						<th>Service</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($row = mysqli_fetch_array($result)){
						echo "<tr>
								<td>" . $row["Source"] . "</td>
								<td>" . $row["Destination"] . "</td>
								<td>" . $row["Day"] . "</td>
								<td>" . $row["Dtime"] . "</td>
								<td>" . $row["Cab"] . "</td>
								<td>" . $row["Fare"] . "</td>
							 </tr>";
					}
					?>
				</tbody>
			</table>
			<?php
			} else{
				echo "<center><h2>Oops not booked yet! Need Help? Book a Ride</h2></center>";
			}
			?>
		</div>
	</div>

  <div class="container my-4">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Details</strong>
            <h3 class="mb-0">Attention to Details</h3>
            <!-- <div class="mb-1 text-muted">Nov 12</div> -->
            <hr>
            <p class="card-text mb-auto">It’s our attention to the small stuff, scheduling of timelines and
              keen project management that makes us stand out from the rest. We are creative, while
              keeping a close eye on the calendar and your budget.</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="300" src="img/about.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Pricing</strong>
            <img src="" alt="">
            <h3 class="mb-0">Reasonable Price</h3>
            <!-- <div class="mb-1 text-muted">Nov 11</div> -->
            <hr>
            <p class="mb-auto">Our prices are competitive and fair. There are no surprise bills. Any
              unexpected or additional expenses must be pre-approved by you. That’s how we would like to
              be treated, and that is how our clients are treated.</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="300" src="img/about1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Clients</strong>
            <img src="" alt="">
            <h3 class="mb-0">Clients Trust</h3>
            <!-- <div class="mb-1 text-muted">Nov 11</div> -->
            <hr>
            <p class="mb-auto">We treat our client with respect and honesty, If we schedule a meeting for
              3pm, we are respectful to your time. If we promise something by the end of the day, we make
              sure it is completed by the end of the day.</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="300" src="img/about1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Creativity</strong>
            <img src="" alt="">
            <h3 class="mb-0">Creativity</h3>
            <!-- <div class="mb-1 text-muted">Nov 11</div> -->
            <hr>
            <p class="mb-auto">We bring our diverse background of advertising, design, branding, public
              relations, research and strategic planning to work for your company. Not only will your
              materials look great – they will get results.</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
          <div class="col-auto d-none d-lg-block">
            <img class="bd-placeholder-img" width="200" height="300" src="img/about1.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> -->
</div>

	<?php include 'include/footer.php'; ?>

	<script type="text/javascript" src="js/header.js"></script>
</body>
</html>
