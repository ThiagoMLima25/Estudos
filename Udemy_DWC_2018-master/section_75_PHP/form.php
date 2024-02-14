<?php 
    if(!empty($_POST["form"])){
        $nome = !empty($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
        $email = !empty($_POST["email"]) ? $_POST["email"] : "Sem definição";

        echo "Meu Nome:".$nome;
        echo "<br>";
        echo "Email:".$email;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php if(!isset($_POST["form"])){ ?>
    <form action="form.php" method="POST">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome">
        
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        
        <input type="submit" name="form" value="Enviar Cadastro">
    </form>
    <?php } ?>
</body>
</html>