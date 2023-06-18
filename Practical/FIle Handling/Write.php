<?php
    $filename = "file.txt";
    $file = fopen($filename, "w"); // Open the file in write mode
    
    if ($file) {
        $name = 'Anurag';//readline("Enter your name: ");
        $data = "Hello, $name";
        fwrite($file, $data);
        
        fclose($file); // Close the file
        echo "Data written to the file successfully.";
    } else {
        echo "Failed to open the file.";
    }    
?>