<!-- Operadores Aritmeticos -->
<!-- Si queremos hacer un envio de datos es con un btn
de tipo submit -->
<?php
    if($_POST){
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        if(is_int((int)$valorA) && is_int((int)$valorB)){
            $sum = $valorA + $valorB;
            echo "<h1>El Resultado de la suma es:</h1>".$sum;
        }else{
            echo "<strong>No introduciste un numero</strong>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio7.php" method="post">
        <label>Valor A:</label>    
        <input type="text" name="valorA" id="">
        <br/>
        <label>Valor B:</label>    
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>