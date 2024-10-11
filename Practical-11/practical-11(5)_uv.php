<?php

$con=mysqli_connect("localhost","root","","StudentDB") or die('Could not connect'.mysqli_error($con));

$enroll_no = $_POST['enroll_no'];
$name = $_POST['name'];
$age = $_POST['age'];
$marks = $_POST['marks'];

$qr = "INSERT INTO student VALUES('$enroll_no','$name',$age,$marks)";

if(mysqli_query($con,$qr))
{
    echo "Insert Data Successfully";
}
else
{
    echo "<br>Error:".mysqli_error($con);
}
mysqli_close($con);

?>