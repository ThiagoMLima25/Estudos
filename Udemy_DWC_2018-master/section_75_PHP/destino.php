<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página Destino</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        // if(!empty($_POST["nome"])){
        //     $nome = $_POST["nome"];
        // }else{
        //     $nome = " Sem definição";
        // }

        // if(!empty($_POST["email"])){
        //     $email = $_POST["email"];
        // }else{
        //     $email = " Sem definição";
        // }

        $nome = !empty($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
        $email = !empty($_POST["email"]) ? $_POST["email"] : "Sem definição";

        echo "Meu Nome:".$nome;
        echo "<br>";
        echo "Email:".$email;
    ?>
</body>
</html>