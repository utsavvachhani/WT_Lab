<?php
$uploadDir = 'uploads/'; // Directory where the uploaded images will be saved
$uploadOk = 1; // Flag to check if upload is successful
$errorMessage = '';

// Create the uploads directory if it doesn't exist
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetFile = $uploadDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check file size (should be less than 200kB)
    if ($_FILES["image"]["size"] > 200000) {
        $errorMessage = "Sorry, your file is too large. Maximum size is 200kB.";
        $uploadOk = 0;
    }

    // Check file format (only gif and jpeg/jpg allowed)
    if ($imageFileType != "gif" && $imageFileType != "jpeg" && $imageFileType != "jpg") {
        $errorMessage = "Sorry, only GIF and JPEG files are allowed.";
        $uploadOk = 0;
    }

    // Attempt to upload the file if no errors
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            $errorMessage = "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Upload</title>
</head>
<body>
    <h1>Upload an Image (GIF or JPEG)</h1>
    <form method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="image" id="image" required>
        <input type="submit" value="Upload Image">
    </form>

    <?php
    // Display any error messages
    if (!empty($errorMessage)) {
        echo "<p style='color:red;'>$errorMessage</p>";
    }
    ?>
</body>
</html>
