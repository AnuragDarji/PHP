<?php
    $filename = "file.txt";
    $mode = "r"; // Read mode
    
    $file = fopen($filename, $mode);
    if ($file) {
        echo "File opened successfully";
        // Perform further operations
    } else {
        echo "Failed to open the file";
    }
    echo "<br> ================================== <br>";

?>