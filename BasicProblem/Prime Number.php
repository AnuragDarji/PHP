<?php

function isPrime($n) {
    if($n <= 1) {
        return false;
    }
    
    for($i = 2; $i <= sqrt($n); $i++) {
        if($n % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Test the function
$num = (int)readline("Enter number: ");;
if(isPrime($num)) {
    echo "$num is a prime number";
} else {
    echo "$num is not a prime number";
}

?>
