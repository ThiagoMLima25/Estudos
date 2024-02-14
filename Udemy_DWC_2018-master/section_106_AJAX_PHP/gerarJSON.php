<?php
    //Preparar o arquivo para callback
    $callback = isset($_GET['callback']) ? $_GET['callback'] : false;

    //Configurações Gerais
    header("Access-Control-Allow-Origin:*");
    $con = mysqli_connect("localhost", "root","", "udemysql");
    mysqli_set_charset($con, 'utf8');

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($con, $selecao);
    
    $retorno = array();
    while($linha = mysqli_fetch_object($produtos)){
        $retorno[] = $linha;
    }

    echo ($callback ? $callback.'(' : '').json_encode($retorno).($callback ? ')' : '');
    // echo json_encode($retorno);

    //fecha con
    mysqli_close($con);
?>