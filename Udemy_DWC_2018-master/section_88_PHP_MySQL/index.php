<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        echo "Estou no index";
        echo "<br>";
        include("connection.php");
        echo "<br>";
        include_once("connection.php");
    ?>      
</body>
</html>