<?php
    function greet($name) {
        echo "Hello, " . $name . "!";
    }
    
    greet("Anurag");  // Output: Hello, Anurag!
  
    // Sum of numbers.
    echo "<br> ================================= <br>";
    function add($num1, $num2) {
        return $num1 + $num2;
    }
    
    $result = add(2, 3);
    echo $result;  // Output: 5

    // Built-in PHP Functions:
    echo "<br> ================================= <br>";
    $length = strlen("Hello, world!");  // String length
    $numbers = array(1, 2, 3, 4, 5);
    $count = count($numbers);  // Array length

    echo $length ."<br>";  // Output: 13
    echo $count;   // Output: 5
?>