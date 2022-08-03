<?php
    // Si haces un envio de la informacio 
    // recepcionamos la informacion 
    if($_POST){
        $txtNombre = $_POST["nombre"];
        $txtApellido = $_POST["txtapellido"];
        echo "Hola ".$txtNombre." ".$txtApellido;
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
    <form action="" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" id="" />
      <br />
      <label for="apellido">Apellido:</label>
      <input type="text" name="txtapellido" id="" />
      <br />
      <input type="submit" value="Enviar" />
    </form>
</body>
</html>