<?php

$con=mysqli_connect("localhost","root","","StudentDB") or die('Could not connect'.mysqli_error($con));
$qr="CREATE TABLE student (
    Enroll_no VARCHAR(10) NOT NULL PRIMARY KEY,
    Name VARCHAR(20) NOT NULL,
    Age INT(3) NOT NULL,
    Marks DECIMAL(5,2) NOT NULL
)";

if(mysqli_query($con,$qr))
{
    echo "Table Created";
}
else
{
    echo "<br>Error:".mysqli_error($con);
}
mysqli_close($con);

?>