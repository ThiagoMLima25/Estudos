<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <!-- Comentário HTML -->
    <h1><?php echo "BRASIL" ?></h1>
    <p><?php echo "Thiago Martins" ?></p>
    <p><?php echo 2*2 ?></p>
    
    <?php
        //Comentário PHP

        /**
         * Comentário
         * Multi linha
         */

        $_nome = "Thiago";
        $_sobrenome = "Martins de Lima";
        $idade = "25 anos";

        $nomeIdade = $_nome." - ".$idade;

        echo "Olá, meu nome é ". $_nome." ".$_sobrenome." e tenho ".$idade." de idade.";
        echo "<br>".$nomeIdade;
    ?>
</body>
</html>