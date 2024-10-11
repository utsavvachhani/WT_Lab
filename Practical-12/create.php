<?php

$con=mysqli_connect("localhost","root","","employee_db") or die('Could not connect'.mysqli_error($con));
$qr="CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    designation VARCHAR(100) NOT NULL
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