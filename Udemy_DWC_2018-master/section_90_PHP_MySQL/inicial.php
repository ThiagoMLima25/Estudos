<?php
    require_once("connection/connection.php"); 
    session_start();
    
    if(!isset($_SESSION["user"])){
        header("location:login.php");
    }

    $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precorevenda, imagempequena FROM produtos";

    if(isset($_GET["produto"])){
        $nome_produto = $_GET["produto"];
        $produtos .= " WHERE nomeproduto LIKE '%".$nome_produto."%'";
    }

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
        <link href="_css/produto_pesquisa.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <?php include_once("_incluir/topo.php"); ?>
            </div>
        </header>
        
        <main>
            <div id="janela_pesquisa">
                <form action="inicial.php" method="GET">
                    <input type="text" name="produto" placeholder="Pesquisa">
                    <input type="image" src="assets/botao_search.png">
                </form>
            </div>

            <div id="listagem_produtos">
                <?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
                    <ul>
                        <li class="imagem">
                            <a href="detalhe.php?codigo=<?=$linha["produtoID"]?>">
                                <img src="<?=$linha["imagempequena"]?>">
                            </a>
                        </li>
                        <li><h3><?=utf8_encode($linha["nomeproduto"])?></h3></li>
                        <li>Tempo de Entrega: <?=$linha["tempoentrega"]?></li>
                        <li>Preco unitario : <?="R$ " , number_format($linha["precorevenda"], 2, ',', '.') ?></li>
                    </ul>
                <?php } ?>
            </div>
        </main>

        <footer id="footer_central">
            <?php include_once("_incluir/rodape.php"); ?>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($con);
?>