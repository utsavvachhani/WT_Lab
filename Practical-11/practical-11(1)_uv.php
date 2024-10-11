<?php

$con=mysqli_connect("localhost","root","") or die('Could not connect'.mysqli_error($con));
$qr="create database StudentDB";

if(mysqli_query($con,$qr)) {
echo "<br>Database StudentDB successfully created..!!!";
}
else {
echo "<br>Error:".mysqli_error($con);
}
mysqli_close($con);
?>