<?php
session_start();

// Redirect to index if name is not set in the session
if (!isset($_SESSION['name'])) {
    header('Location: index.php');
    exit();
}

// Get the current time and calculate the duration
$current_time = time();
$duration = $current_time - $_SESSION['start_time'];
$durationMinutes = floor($duration / 60);
$name = $_SESSION['name'];
$start_time = date('H:i:s', $_SESSION['start_time']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Page</title>
    <style>
        .logout {
            text-align: right;
        }
    </style>
</head>
<body>
    <h1>Hello, <?php echo $name; ?>!</h1>
    <p style="text-align: right;">Start Time: <?php echo $start_time; ?></p>
    
    <div class="logout">
        <form method="post" action="logout.php">
            <input type="submit" value="Logout">
        </form>
    </div>
</body>
</html>
