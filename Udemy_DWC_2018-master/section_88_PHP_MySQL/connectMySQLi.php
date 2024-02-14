<?php
    //Abrir conexão
    $servidor = "localhost";
    $senha = "root";
    $db = "udemysql";

    $con = mysqli_connect($servidor,$senha,"",$db);

    //Teste de Conexão
    if(mysqli_connect_errno()){
        die("Conexão falhou ".mysqli_connect_errno());
    }
?>

<?php
    $consulta_categorias = "SELECT * FROM categorias ";
    $categorias = mysqli_query($con, $consulta_categorias);

    if(!$categorias){
        die("Falha na consulta do banco de dados");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <ul>
    <?php
        while($registro = mysqli_fetch_assoc($categorias)){
    ?>
        <li><?= $registro["nomecategoria"]?></li>
    <?php
        }
    ?>
    </ul>
</body>
</html>
<?php
    mysqli_free_result($categorias); //Libera dados da memória do servidor
    mysqli_close($con); //Fecha conexão
?>