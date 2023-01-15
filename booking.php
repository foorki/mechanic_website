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
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php include 'include/header.php'; ?>

    <?php



    ?>

    <table class="container my-5">
        <tr>
            <th>Booking Id</th>
            <th>Current Location</th>
            <th>Booking Status</th>
            <th></th>



        </tr>
        <?php

        $query = "SELECT id FROM USER WHERE email='" . $_SESSION['email'] . "' ";

        $result = mysqli_query($con, $query) or die($mysqli_error($con));
        $num = mysqli_fetch_all($result);
        // print_r( $num[0][0]);
        $query = "SELECT * FROM USER_BOOKING WHERE user_id='" . $num[0][0] . "' ";
        $result = mysqli_query($con, $query) or die($mysqli_error($con));
        $order = mysqli_fetch_all($result);
        // print_r($order);
        
        foreach ($order as $ord) {
            echo "        <tr>
            <form action='./booking.php' method='post'>
            <td>" . str_replace("'", " ", $ord[0]) . "</td>
            <td>" . str_replace("'", " ", $ord[2]) . "</td>
            <td>" . str_replace("'", " ", $ord[5]) . "</td>

           
            <td> <input value= '$ord[0]' hidden name= 'ordID'/>  <button type='submit' class='btn btn-danger' >Cancel</button></td>
            </form>
    
        </tr>";

        }




        if (isset($_POST['ordID'])) {
            $query = "DELETE FROM USER_BOOKING WHERE id = '" . $_POST['ordID'] . "'";
            if (mysqli_query($con, $query)) {
                header('location: booking.php? message=Record Deleted Successfully. ');


            } else {
                echo "<h6 style='text-align:center; color: red; margin-top: 10px;'>Record doesn't Deleted.</h6>";

            }
        }

        if(isset($_GET['message'])){
            echo "<h5 style='text-align:center; color: green; margin-top: 10px;'>".$_GET['message']."</h5>";


        }
        ?>

    </table>

    <?php include 'include/footer.php'; ?>


</body>

</html>