<?php

$con=mysqli_connect("localhost","root","") or die('Could not connect'.mysqli_error($con));
$qr="show databases";
$r=mysqli_query($con,$qr);

echo "Available Databases:<br>";
while($row=mysqli_fetch_assoc($r))
{
    echo $row['Database'] . "<br>";
}
mysqli_close($con);

?>