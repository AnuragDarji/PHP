<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File handling</title>
</head>
<body>
    <?php
        //1. create file....
        
        // $filename = "file.txt";
        // $file = fopen($filename,"w");
        // if($file){
        //     fwrite($file,"This is new file.");
        //     fclose($file);
        //     echo "File created successfully";
        // }
        // else{
        //     echo "Unable to create file.";
        // }

        //2. open file....

        // $file = fopen("file.txt","r");
        // $line = fgets($file);
        // echo $line;

        //3. append to existing file....

        $file = fopen("file.txt","a");
        fwrite($file,"\nThis line added");
        // Open File.
        $file = fopen("file.txt","r");
        $line = fgets($file);
        echo $line;

        echo "<br><h1>file updated<h1>";

    ?>
</body>
</html>
