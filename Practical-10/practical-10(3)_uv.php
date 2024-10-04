<?php
// Specify the file name
$filename = 'example.txt'; // Ensure this file exists in the same directory

// Check if the file exists
if (file_exists($filename)) {
    // Get the file content
    $content = file_get_contents($filename);
    
    // Count the number of lines, words, and characters
    $lines = explode(PHP_EOL, $content);
    $lineCount = count($lines);
    $wordCount = str_word_count($content);
    $charCount = strlen($content);

    // Display the content of the file
    echo "<h2>File Content:</h2><pre>" . htmlspecialchars($content) . "</pre>";
    
    // Display statistics
    echo "<h3>Statistics:</h3>";
    echo "Total Lines: $lineCount<br>";
    echo "Total Words: $wordCount<br>";
    echo "Total Characters: $charCount<br>";
} else {
    // If the file does not exist, show an error message
    echo "Error: File '$filename' does not exist.";
}
?>
