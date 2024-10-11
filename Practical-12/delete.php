<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Delete Employee</title>
</head>
<body>
    <h1>Delete Employee</h1>
    <form action="delete.php" method="post">
        <label for="id">Employee ID:</label>
        <input type="number" name="id" required>
        
        <input type="submit" name="submit" value="Delete">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $conn = new mysqli('localhost', 'root', '', 'employee_db');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $id = $_POST['id'];

        $sql = "DELETE FROM employees WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Employee deleted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    <a class="button" href="index.html">Back to Home</a>
</body>
</html>
