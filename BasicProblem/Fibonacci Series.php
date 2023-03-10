<?php
// Function to generate Fibonacci series up to n terms
function fibonacci($n){
    // Initialize variables
    $num1 = 0;
    $num2 = 1;
    $result = array();
    // Add first two terms to the result array
    array_push($result, $num1, $num2);
    // Loop to generate Fibonacci series up to n terms
    for($i=2;$i<$n;$i++){
        $num3 = $num1 + $num2;
        array_push($result, $num3);
        $num1 = $num2;
        $num2 = $num3;
    }
    // Return the result array
    return $result;
}
// Test the function
$n = (int)readline("Number of terms to generate: ");; // Number of terms to generate
$result = fibonacci($n);
echo "Fibonacci series up to $n terms: ";
echo implode(", ", $result); // Output the result array as a string separated by commas
?>
