<?php

   // * El metodo post nos premite recepcionar informacion es como un get
   // * Recibe la informacion del HTML 
   // * El action dice a que archivo mandaremos esa informacion del formulario

    if($_POST){

        $nombre = $_POST['txtNombre'];

        echo "$nombre";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" id="txtNombre">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>