<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Employees</title>
</head>
<body>
    <h1>Employee List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'employee_db');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM employees";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['department']}</td>
                        <td>{$row['designation']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No employees found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    <a class="button" href="index.html">Back to Home</a>
</body>
</html>
