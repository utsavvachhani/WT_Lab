<?php
// Start the session
session_start();

// Set cookie expiration time (1 day)
$cookieExpiration = time() + (86400 * 1); // 86400 seconds = 1 day

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set cookies for name and favorite color
    if (!empty($_POST['name'])) {
        setcookie("user_name", htmlspecialchars($_POST['name']), $cookieExpiration);
    }
    if (!empty($_POST['color'])) {
        setcookie("favorite_color", htmlspecialchars($_POST['color']), $cookieExpiration);
    }
}

// Retrieve cookie values
$userName = isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : '';
$favoriteColor = isset($_COOKIE['favorite_color']) ? $_COOKIE['favorite_color'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies Demo</title>
</head>
<body>
    <h1>Set Your Name and Favorite Color</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($userName); ?>" required>
        <br><br>
        
        <label for="color">Favorite Color:</label>
        <input type="text" name="color" value="<?php echo htmlspecialchars($favoriteColor); ?>" required>
        <br><br>

        <input type="submit" value="Set Cookies">
    </form>

    <?php if ($userName || $favoriteColor): ?>
        <h2>Hello, <?php echo htmlspecialchars($userName); ?>!</h2>
        <p>Your favorite color is <span style="color: <?php echo htmlspecialchars($favoriteColor); ?>"><?php echo htmlspecialchars($favoriteColor); ?></span>.</p>
    <?php endif; ?>
</body>
</html>
