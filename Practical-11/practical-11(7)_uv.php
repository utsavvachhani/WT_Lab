<?php

$con=mysqli_connect("localhost","root","","StudentDB") or die('Could not connect'.mysqli_error($con));
$qr="DELETE FROM student WHERE Enroll_no BETWEEN 1 AND 3" or die("Not Found");

if(mysqli_query($con,$qr))
{
    echo "Delete Data Successfully";
}
else
{
    echo "<br>Error:".mysqli_error($con);
}
mysqli_close($con);

?>