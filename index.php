<?php
  require("include/config.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome | QAF</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <?php include 'include/header.php'; ?>


  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
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

  <div class="container">
    <div class="row featurette d-flex justify-content-center align-items-center">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1 my-3">About QAF<span class="text-muted"></span></h2>
        <p class="lead">More Than 10 Years of Experience
          <br>
          <br>
          QAF is a full-service preventive maintenance center. We perform high quality, guaranteed service
          you can trust at a fair price. We work on domestic and foreign vehicles and are your best choice for scheduled
          maintenance of your car, SUV, truck and fleet vehicles.
          <br>
          <br>
          Same day service is provided in many instances
          <br>
          <br>
          Our work is warrantied for a full year
        </p>
      </div>
      <div class="col-md-5 order-md-7">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-fluid" width="500"
          height="500" src="img/about6.jpg" alt="">
      </div>
    </div>
  </div>

  <div class="container my-5">

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">General Maintenance Package</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$22<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Brakes service (RUST REMOVING & GREASING)</li>
              <li>Brake pad change if required (PARTS WILL BE CHARGED SEPARATELY)</li>
              <li>Throttle body Cleaning</li>
              <li>Air intake Cleaning</li>
              <li>MAP, MAF, TPS Cleaning</li>
              <li>Plug cleaning</li>
              <li>Spark coils Cleaning</li>
              <li>Filters Cleaning</li>
              <li>Computerized Scanning</li>
              <li>Complimentary oil change (PARTS WILL BE CHARGED SEPARATELY)</li>
              <li>Complete car inspection by DAE engineer through our inspection sheet</li>
            </ul>
            <a class="w-100 btn btn-lg btn-outline-primary" href="appointment.php" role="button">Get Appointment</a>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Supra Package</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$27<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Catalytic Cleaning by Machine</li>
              <li>Brakes Service (RUST REMOVING & GREASING)</li>
              <li>Brake Pad Change if Required (PARTS WILL BE CHARGED SEPARATELY)</li>
              <li>Throttle Body Cleaning</li>
              <li>MAP, MAF, TPS & Oxygen Sensor Cleaning</li>
              <li>Spark Plug Cleaning</li>
              <li>Spark Coils Cleaning</li>
              <li>Filters Cleaning</li>
              <li>Computerized Throttle Body Calibration</li>
              <li>Complimentary Oil Change (OIL WILL BE CHARGED SEPARATELY)</li>
              <li>Complete Car Inspection By DAE Engineer Through Our Inspection Sheet</li>
            </ul>
            <a class="w-100 btn btn-lg btn-primary" href="appointment.php" role="button">Get Appointment</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Toyota/Lexus Hybrid Package</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$35<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Hybrid System Health Report/Battery Life</li>
              <li>Catalytic Converter Cleaning</li>
              <li>Inspection/Break-pad/Service</li>
              <li>Engine Health Report/Computerized Tuning</li>
              <li>Injector Cleaner Fluid</li>
              <li>Fuel Filter Cleaning</li>
              <li>Coolant Change</li>
              <li>Engine Oil Replacement</li>
              <li>Spark Plugs Servicing</li>
              <li>Hybrid Battery Fan Servicing</li>
              <li>TP Sensor Calibration (EFI)</li>
              <li>Fuel Line Cleaning</li>
              <li>Performance Inspection</li>
              <li>Brake Pad/ Shoe Inspection</li>
              <li>* Rates may vary for SUV's</li>
            </ul>
            <a class="w-100 btn btn-lg btn-primary" href="appointment.php" role="button">Get Appointment</a>
            <!-- <button type="button" class="w-100 btn btn-lg btn-primary"></button> -->
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php include 'include/footer.php'; ?>

  <!-- <script type="text/javascript" src="js/header.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>