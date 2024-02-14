<?php
    require_once("connection/connection.php"); 
    session_start();
    
    if(!isset($_SESSION["user"])){
        header("location:login.php");
    }

    if(isset($_GET["codigo"])){
        $produto_id = $_GET["codigo"];
    }else{
        Header("Location: inicial.php");
    }

    //Consulta db
    $consulta = "SELECT * FROM produtos WHERE produtoID = {$produto_id}";
    $detalhe = mysqli_query($con, $consulta);

    if(!$detalhe){
      die("Falha no banco de dados");  
    }else{
        $dadosDetalhes  = mysqli_fetch_assoc($detalhe);
            $produtoID      = $dadosDetalhes["produtoID"];
            $nomeproduto    = $dadosDetalhes["nomeproduto"];
            $descricao      = $dadosDetalhes["descricao"];
            $codigobarra    = $dadosDetalhes["codigobarra"];
            $tempoentrega   = $dadosDetalhes["tempoentrega"];
            $precorevenda   = $dadosDetalhes["precorevenda"];
            $precounitario  = $dadosDetalhes["precounitario"];
            $estoque        = $dadosDetalhes["estoque"];
            $imagemgrande   = $dadosDetalhes["imagemgrande"];
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/detalhes.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <?php include_once("_incluir/topo.php"); ?>
            </div>
        </header>
        
        <main>
            <?php
                if(isset($_SESSION["user"])){
                    $_SESSION["user"];
                }
            ?>
            <div id="listagem_produtos">
                <ul>
                    <li class="imagem"><img src="<?php echo $imagemgrande ?>"></li>
                    <li><h3><?php echo utf8_encode($nomeproduto) ?></h3></li>
                    <li><b>Descrição:</b><?php echo $descricao ?></li>
                    <li><b>Código de Barra : </b><?php echo $codigobarra ?></li>
                    <li><b>Tempo de Entrega : </b><?php echo $tempoentrega ?></li>
                    <li><b>Preço de Revenda : </b><?="R$ " , number_format($precorevenda, 2, ',', '.') ?></li>
                    <li><b>Preço Unitário : </b><?="R$ " , number_format($precounitario, 2, ',', '.') ?></li>
                    <li><b>Estoque : </b><?php echo $estoque ?></li>
                </ul>
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