<?php
    $filename = "C:/xampp/htdocs/PHP/Practical/File/file.txt";

    if (file_exists($filename)) {
        echo "The file exists.";
    } else {
        echo "The file does not exist.";
    }    
?>