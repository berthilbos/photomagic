<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>test</h1>


<?php
$dir = $_POST['folderName'];
$files = scandir($dir);
    foreach ($files as $value) {
        $extension = pathinfo($value, PATHINFO_EXTENSION); 
    
        $randNum = rand(100000,999999);
        $dot = '.';
        $newName = $randNum.$dot.$extension;
        chdir($dir);
        rename($value, $newName);
    };
    header("location: succes.php");
    exit(); 


?>
</body>
</html>