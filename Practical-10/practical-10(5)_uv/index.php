<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store the name and start time in session
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['start_time'] = time();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Your Name</title>
</head>
<body>
    <h1>Enter Your Name</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
