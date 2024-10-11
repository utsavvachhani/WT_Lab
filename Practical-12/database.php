<?php

    $con=mysqli_connect("localhost","root","") or die('Could not connect'.mysqli_error($con));
    $qr="create database employee_db";
    
    if(mysqli_query($con,$qr)) {
    echo "Database employee_db successfully created..!!!";
    }
    else {
    echo "<br>Error:".mysqli_error($con);
    }
    mysqli_close($con);
?>