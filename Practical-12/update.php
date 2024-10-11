<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    <form action="update.php" method="post">
        <label for="id">Employee ID:</label>
        <input type="number" name="id" required>
        
        <label for="name">New Name:</label>
        <input type="text" name="name">
        
        <label for="department">New Department:</label>
        <input type="text" name="department">
        
        <label for="designation">New Designation:</label>
        <input type="text" name="designation">
        
        <input type="submit" name="submit" value="Update">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $conn = new mysqli('localhost', 'root', '', 'employee_db');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $id = $_POST['id'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $designation = $_POST['designation'];

        $sql = "UPDATE employees SET name='$name', department='$department', designation='$designation' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Employee updated successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    <a class="button" href="index.html">Back to Home</a>

</body>
</html>
