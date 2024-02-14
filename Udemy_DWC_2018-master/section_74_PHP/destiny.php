<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino</title>
</head>
<body>
    <?php
        $planets = ["Marte", "Saturno", "Jupter"];
        $destiny = $_GET["code"];
        echo "Seu destino está em ".$planets[$destiny];
    ?>
</body>
</html>