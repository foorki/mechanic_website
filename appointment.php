<?php
  require("include/config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment | QAF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    

<?php include 'include/header.php'; ?>

<div class="container my-4">
        <h2>Get Appointment</h2>

        <form class="row g-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" value="" required>
             </div>
            <div class="col-md-6">
                <label for="inputSelect4" class="form-label">Select Service</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Tuning</option>
                    <option value="2">Service</option>
                    <option value="3">Engine</option>
                </select>
            </div>
            <div class="col-md-6">
              <label for="inputNumber4" class="form-label">Number</label>
              <input type="" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
          </form>
    </div>

<?php include 'include/footer.php'; ?>
    
    
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

</body>

</html>