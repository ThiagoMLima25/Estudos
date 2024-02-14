<?php
    require_once("connection/connection.php"); 

    $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precorevenda, imagempequena FROM produtos";
    $resultado = mysqli_query($con, $produtos);

    if(!$resultado){
        die("Falha na consulta ao banco");
    }
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <?php include_once("_incluir/topo.php"); ?>
            </div>
        </header>
        
        <main>  

        <div id="listagem_produtos">
            <?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
                <ul>
                    <li class="imagem"><img src="<?=$linha["imagempequena"]?>"></li>
                    <li><h3><?=$linha["nomeproduto"]?></h3></li>
                    <li>Tempo de Entrega: <?=$linha["tempoentrega"]?></li>
                    <li>Preco unitario : <?="R$ " , number_format($linha["precorevenda"], 2, ',', '.') ?></li>
                </ul>
            <?php } ?>
        </div>
        </main>

        <footer>
            <?php include_once("_incluir/rodape.php"); ?>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($con);
?>