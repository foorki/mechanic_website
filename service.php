<?php
  require("include/config.php");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Service | QAF</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

<?php include 'include/header.php'; ?>


<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/service.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Service</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque a quos accusamus!</p>
      </div>
    </div>
    </div>

  <div class="container my-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="img/services/batteries.jpg" class="card-img-top" alt="...">
          <hr>
          <div class="card-body">
            <h5 class="card-title">Oil, Lube, Filters</h5>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/services/service-grid-08.jpg" class="card-img-top" alt="...">
          <hr>
          <div class="card-body">
            <h5 class="card-title">Tuning</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/services/service-grid-01.jpg" class="card-img-top" alt="...">
          <hr>
          <div class="card-body">
            <h5 class="card-title">Computer Diagnostics</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="img/services/oil.jpg" class="card-img-top" alt="...">
          <hr>
          <div class="card-body">
            <h5 class="card-title">Oil, Lube, Filters</h5>

          </div>
        </div>
      </div>
    </div>

  </div>

  <?php include 'include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>