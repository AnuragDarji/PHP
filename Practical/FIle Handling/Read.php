<?php
    $filename = "file.txt";
    $file = fopen($filename, "r"); // Open the file in read mode

    if ($file) {
        while (!feof($file)) {
            $line = fgets($file);
            echo $line . "<br>";
        }

        fclose($file); // Close the file
    } else {
        echo "Failed to open the file.";
    }
?>