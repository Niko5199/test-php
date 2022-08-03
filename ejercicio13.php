<?php
    if($_POST){
        $btn = $_POST["btn"];
        switch($btn){
            case 1:
                echo "Seleccionaste el btn 1";
            break;
            case 2:
                echo "Seleccionaste el btn 2";
            break;
            case 3:
                echo "Seleccionaste el btn 3";
            break;
        }
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Como usar el switch?</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
        <input type="submit" value="1" name="btn">
        <input type="submit" value="2" name="btn">
        <input type="submit" value="3" name="btn">
    </form>
</body>
</html>