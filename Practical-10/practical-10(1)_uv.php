<?php
// Define a user-defined function to perform calculations
function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Cannot divide by zero.";
            }
            return $num1 / $num2;
        default:
            return "Invalid operation.";
    }
}

$result = null; // Variable to hold the result

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the values from the form
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $operation = $_POST['operation'];

    // Call the function to perform the calculation
    $result = calculate($num1, $num2, $operation);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" step="any" required><br><br>

        <label for="num2">Number 2:</label>
        <input type="number" name="num2" step="any" required><br><br>

        <label for="operation">Operation:</label>
        <select name="operation" required>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php if ($result !== null): ?>
        <h2>Result: <?php echo htmlspecialchars($result); ?></h2>
    <?php endif; ?>
</body>
</html>
