<?php
session_start();

// Calculate the duration if the session is set
if (isset($_SESSION['start_time'])) {
    $duration = time() - $_SESSION['start_time'];
    $durationMinutes = floor($duration / 60);
    $name = $_SESSION['name'];

    // Destroy the session
    session_destroy();
} else {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>
    <h1>Thank You, <?php echo htmlspecialchars($name); ?>!</h1>
    <p>You used the application for <?php echo $durationMinutes; ?> minutes.</p>
</body>
</html>
