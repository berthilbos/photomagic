<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
</form>


<?php
$dir = 'photo';
$files = scandir($dir);

if(isset($_POST['button1'])) {
    foreach ($files as $value) {
        $extension = pathinfo($value, PATHINFO_EXTENSION); 
    
        $randNum = rand(100000,999999);
        $dot = '.';
        $newName = $randNum.$dot.$extension;
        chdir('photo');
        rename($value, $newName);
    };
    echo('succes!');
}

?>
</body>
</html>