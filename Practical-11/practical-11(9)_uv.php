<?php

$con=mysqli_connect("localhost","root","","StudentDB") or die('Could not connect'.mysqli_error($con));
$qr="UPDATE student SET Enroll_no='ET22BTIT137',Name='Utsav',Marks=90 WHERE Age = 30" or die("Not Found");

if(mysqli_query($con,$qr))
{
    echo "Update Data Successfully";
}
else
{
    echo "<br>Error:".mysqli_error($con);
}
mysqli_close($con);

?>