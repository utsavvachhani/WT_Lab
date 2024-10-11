<?php

$con=mysqli_connect("localhost","root","","StudentDB") or die('Could not connect'.mysqli_error($con));
$qr="SELECT Enroll_no, Name, Age, Marks FROM student WHERE marks >= 35" or die("Not Found");
$r=mysqli_query($con,$qr);

echo "<h1>Student Records</h1>";
echo "<table border='1'>
        <tr>
            <th>Enroll No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Marks</th>
        </tr>";

while($row=mysqli_fetch_array($r))
{
echo "<tr>
<td> ".$row['Enroll_no']." </td>
<td> ".$row['Name']." </td>
<td> ".$row['Age']." </td>
<td> ".$row['Marks']." </td>
</tr>";
}
echo "</table>";

mysqli_close($con);

?>