<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrustar Php en html</title>
</head>

<body>
    <h2>Curso Php</h2>
    <?php
    echo "Render "
    ?>

    <?php
    print "<h4>Titulo h4</h4>";
    print "hola";

    print "<hr/>"
    ?>

    <h4><?php print "Titulo H4" ?></h4>


</body>

</html>