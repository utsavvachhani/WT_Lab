<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $interests = isset($_POST['interests']) ? $_POST['interests'] : [];
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);

    // Display the submitted data
    echo "<h1>User Submitted Information</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";

    // Display interests
    echo "<p><strong>Interests:</strong> " . (!empty($interests) ? implode(", ", $interests) : 'None') . "</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Country:</strong> $country</p>";
} else {
    // If accessed without submitting the form, redirect to form page
    header('Location: form.php');
    exit();
}
?>
