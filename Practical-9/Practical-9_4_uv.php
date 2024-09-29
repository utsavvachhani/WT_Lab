<?php  

// Define two matrices
$a = array(  
    array(1, 3, 2),  
    array(3, 1, 1),  
    array(1, 2, 2)  
);  

$b = array(  
    array(2, 1, 1),  
    array(1, 0, 1),  
    array(1, 3, 1)  
);  

$row1 = count($a);  
$col1 = count($a[0]);  
$row2 = count($b);  
$col2 = count($b[0]);  

// Function to calculate the transpose of a matrix
function transpose($matrix) {
    $transposed = array();
    for ($i = 0; $i < count($matrix[0]); $i++) {
        $transposed[$i] = array();
        for ($j = 0; $j < count($matrix); $j++) {
            $transposed[$i][$j] = $matrix[$j][$i];
        }
    }
    return $transposed;
}

// Function to add two matrices
function addMatrices($a, $b) {
    $result = array();
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[0]); $j++) {
            $result[$i][$j] = $a[$i][$j] + $b[$i][$j];
        }
    }
    return $result;
}

// Check if matrices can be added
if ($row1 != $row2 || $col1 != $col2) {
    print("Matrices cannot be added <br>");  
} else {
    $sum = addMatrices($a, $b);
    print("Sum of the two matrices: <br>");  
    for ($i = 0; $i < $row1; $i++) {  
        for ($j = 0; $j < $col1; $j++) {  
            print($sum[$i][$j] . " ");  
        }  
        print("<br>");  
    }  
}

// Check if matrices can be multiplied
if ($col1 != $row2) {  
    print("Matrices cannot be multiplied <br>");  
} else {    
    $prod = array_fill(0, $row1, array_fill(0, $col2, 0));  

    for ($i = 0; $i < $row1; $i++) {  
        for ($j = 0; $j < $col2; $j++) {  
            for ($k = 0; $k < $col1; $k++) {  
                $prod[$i][$j] += $a[$i][$k] * $b[$k][$j];   
            }  
        }  
    }  
      
    print("Product of the two matrices: <br>");  
    for ($i = 0; $i < $row1; $i++) {  
        for ($j = 0; $j < $col2; $j++) {  
            print($prod[$i][$j] . " ");  
        }  
        print("<br>");  
    }  
}

// Calculate and display the transpose of the first matrix
$transposeA = transpose($a);
print("Transpose of the first matrix: <br>");  
for ($i = 0; $i < count($transposeA); $i++) {  
    for ($j = 0; $j < count($transposeA[0]); $j++) {  
        print($transposeA[$i][$j] . " ");  
    }  
    print("<br>");  
}  
?>