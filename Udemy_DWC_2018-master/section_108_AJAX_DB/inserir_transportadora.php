  <?php
    $conecta = mysqli_connect("localhost","root","","udemysql");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = utf8_decode($_POST["nometransportadora"]);
        $endereco   = utf8_decode($_POST["endereco"]);
        $cidade     = utf8_decode($_POST["cidade"]);
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";

        $operacao = mysqli_query($conecta, $inserir);

        $retorno = array();
        if($operacao){
            $retorno["sucesso"] = true;
            $retorno["mensagem"] = "Transportadora inserida com sucesso";
        }else{
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = "Falha no sistema, tente novamente mais tarde";
        }

        echo json_encode($retorno);
    }
?>