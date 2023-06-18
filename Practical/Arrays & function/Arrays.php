<?php
    // Types of arrays in PHP.

    // 1. Numeric Array
    $student = array("jaimin","kartik","Amit");
    echo $student[0]."<br>";
    echo $student[1]."<br>";
    echo $student[2]."<br>";

    echo "================================================<br>";
    // 2. Associative Array(key => value)
    $student = array("jaimin"=>95,"kartik"=>93,"Amit"=>105);
    echo $student['jaimin']."<br>";
    echo $student['kartik']."<br>";
    echo $student['Amit']."<br>";
    echo "================================================<br>";

    // 3. Multidimensional Array
    $shopping = array(array("Banana",30),array("Orange",70),array("Mango",100));
    echo $shopping[0][0]."cost Rs.".$shopping[0][1]."<br/>";
    echo $shopping[1][0]."cost Rs.".$shopping[1][1]."<br/>";
    echo $shopping[2][0]."cost Rs.".$shopping[2][1]."<br/>";
?>
