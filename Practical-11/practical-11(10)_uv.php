<?php

$con=mysqli_connect("localhost","root","","StudentDB") or die('Could not connect'.mysqli_error($con));

$qr="DROP TABLE student" or die("Not Found");

if(mysqli_query($con,$qr))
{
    echo "Drop Table Successfully";
}
else
{
    echo "<br>Error:".mysqli_error($con);
}

$qr="DROP Database StudentDB" or die("Not Found");

if(mysqli_query($con,$qr))
{
    echo "<br>Drop Database Successfully";
}
else
{
    echo "<br>Error:".mysqli_error($con);
}


mysqli_close($con);

?>