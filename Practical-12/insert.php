<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Insert Employee</title>
</head>
<body>
    <h1>Insert Employee</h1>
    <form action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="department">Department:</label>
        <input type="text" name="department" required>
        
        <label for="designation">Designation:</label>
        <input type="text" name="designation" required>
        
        <input type="submit" name="submit" value="Insert">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $conn = new mysqli('localhost', 'root', '', 'employee_db');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $name = $_POST['name'];
        $department = $_POST['department'];
        $designation = $_POST['designation'];

        $sql = "INSERT INTO employees (name, department, designation) VALUES ('$name', '$department', '$designation')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New employee inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    <a class="button" href="index.html">Back to Home</a>

</body>
</html>
