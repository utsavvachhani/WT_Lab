<?php
// Start the session
session_start();

// Set cookie expiration time (1 year)
$cookieExpiration = time() + (86400 * 365); // 86400 seconds = 1 day

// Check if the visit count cookie is set
if (isset($_COOKIE['visit_count'])) {
    // Increment the visit count
    $visitCount = $_COOKIE['visit_count'] + 1;
} else {
    // Initialize visit count
    $visitCount = 1;
}

// Set the updated visit count cookie
setcookie("visit_count", $visitCount, $cookieExpiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visit Counter</title>
</head>
<body>
    <h1>Welcome to Our Page!</h1>
    <p>You have visited this page <?php echo $visitCount; ?> time(s).</p>
</body>
</html>
