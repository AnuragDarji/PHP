<?php
    $filename = "C:/xampp/htdocs/PHP/Practical/File/file.txt";
    $file = fopen($filename, "r"); // Open the file
    
    if ($file) {
        // Perform operations on the file
        
        fclose($file); // Close the file
        echo "File closed successfully.";
    } else {
        echo "Failed to open the file.";
    }    
?>