<?php
session_start();
require("include/config.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QAF</title>

    <style>
        input{
            width: 250px;
 
        }
    </style>
</head>
<body>
<?php include 'include/header.php'; ?>



<?php 


if(isset($_POST['updatePass'])){
    $new_pass = $_POST['newPass'];
    $re_pass = $_POST['rePass'];

    if($new_pass == $re_pass){
       
        

        $pass_query = mysqli_query($con,"UPDATE USER SET pass ='".MD5($re_pass)."' WHERE email ='".$_SESSION['email']."'");
        echo "<h5 style='text-align:center; color: green; margin-top: 10px;'>Password Change Successfully.</h5>";

    }
    else{
        echo "<h6 style='text-align:center; color: red; margin-top: 10px;'>Password doesn't match.</h6>";

    }



}



?>


<h1 style= 'text-align: center; margin-top: 20px;'> Update Password </h1>

<div style=" display: block; justify-content: center; justify-items: center; ;">
<form action="./setting.php" style="margin :5% 0  2% 41%; " method="post">
  <label for="newPass">New Password:</label><br>
  <input type="password" id="newPass" name="newPass" pattern=".{6,}" required><br>
  <label for="rePass">Confirm Password:</label><br>
  <input type="password" id="rePass" name="rePass" pattern=".{6,}"  required><br>
  <br>
  <input type="submit" class="btn btn-primary" name="updatePass" value="Update">
  
</form> 
</div>






<?php include 'include/footer.php'; ?>

</body>
</html>


