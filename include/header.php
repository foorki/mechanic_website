
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QAF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">QAF</a> 
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link active " href="mechanic.php">Mechanic</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="service.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="booking.php">Booking</a>
              </li>

            </ul> 
          </div>
           
         
          
            <?php
            if (isset($_SESSION['email'])) { 
              ?>

              <div class="navbar-right">
				        <a href="user.php" class="links"><?php echo $_SESSION['fname']; ?></a>
		        	</div>
		
	      		  
            <div class="mx-2"> 
                    <a class="btn btn-primary" href="logout_script.php" role="button">Logout</a>
                    <a class="btn btn-primary" href="setting.php" role="button">Setting</a>
            </div>
          </div>
       
      </nav>

      <?php 
    } else {  
      ?> 
      

      
            
            
            
<nav>
<div class="mx-2"> 
        <a class="btn btn-primary" href="login.php" role="button">Login</a>
        <a class="btn btn-primary" href="signup.php" role="button">Signup</a>
</div>
</div>
</div>
</nav>
<?php 
 }
  ?>
      <div id="clear"></div>

<!-- <div id="clear"></div> --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="js/header.js"></script>

</body>
</html> 
