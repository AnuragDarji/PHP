<?php
function factorial($n) {
  if($n == 0) {
    return 1;
  }
  else {
    return $n * factorial($n-1);
  }
}

$num = (int)readline("Enter number: "); // example input number

$fact = factorial($num); // calling the function with the input number

echo "Factorial of $num is: $fact"; // printing the output
?>
