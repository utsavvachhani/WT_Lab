<?php

$con=mysqli_connect("localhost","root","","StudentDB") or die('Could not connect'.mysqli_error($con));
$qr="show tables";
$r=mysqli_query($con,$qr);

echo "Available Tables:<br>";
while($row=mysqli_fetch_row($r))
{
    echo $row[0] . "<br>";
}
mysqli_close($con);

?>