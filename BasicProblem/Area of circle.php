<?php
$radius = (int)readline("Enter radius of circle: "); // radius of the circle
$pi = 3.14159; // the value of pi

// calculate the area
$area = $pi * pow($radius, 2);

echo "The area of the circle is: " . $area;
?>
