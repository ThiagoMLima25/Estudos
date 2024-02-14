<?php
    require_once("connection/connection.php");
    
    //iniciar sessão
    session_start();

    if(isset($_POST["transportadoraID"])){
        $trID = $_POST["transportadoraID"];

        $delete = "DELETE FROM transportadoras WHERE transportadoraID = {$trID}";
        $operacaoDelete = mysqli_query($con, $delete);

        if(!$operacaoDelete){
            die("Erro ao excluir dado do banco");
        }
    }

    //Consulta a tabela de transportadoras
    $tr = "SELECT * FROM transportadoras ";
    
    if(isset($_GET["codigo"])){
        $id = $_GET["codigo"];
        $tr .= "WHERE transportadoraID = {$id}";
    }else{
        header("location:listagem.php");
    }

    $con_tr = mysqli_query($con, $tr);

    if(!$con_tr){
        die("Falha na busca ao banco");
    }

    $info_tr = mysqli_fetch_assoc($con_tr);
    
    //Consulta aos estados
    $estados = "SELECT * FROM estados";
    $listEstados =  mysqli_query($con, $estados);

    if(!$listEstados){
        die("Falha na busca ao banco");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <?php include_once("_incluir/topo.php"); ?>
            </div>
        </header>
        
        <main>
           <div id="janela_formulario">
                <form action="exclusao.php" method="POST">
                    <h2>Exclusão de Transportador</h2>
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" name="nometransportadora" id="nometransportadora" value="<?=utf8_encode($info_tr["nometransportadora"]) ?>">
                    <label for="endereco">Endereço</label>
                    <input type = "text" name = "endereco" placeholder = "Endereço" value="<?=utf8_encode($info_tr["endereco"]) ?>">
                    <label for="cidade">Cidade</label>
                    <input type = "text" name = "cidade" placeholder = "Cidade" value="<?=utf8_encode($info_tr["cidade"]) ?>">
                    <label for="estado">Estado</label>
                    <select name="estado">
                        <?php
                            $meuEstado = utf8_encode($info_tr["estadoID"]);
                            
                            while($linha = mysqli_fetch_assoc($listEstados)){
                                $estadoDb = $linha["estadoID"];

                                if($meuEstado == $estadoDb){
                                    echo "<option value=". $linha["estadoID"] ." selected>". utf8_encode($linha["nome"]) ."</option>";
                                }else{
                                    echo "<option value=". $linha["estadoID"] .">". utf8_encode($linha["nome"]) ."</option>";
                                }
                            }
                        ?>
                    </select>
                    <label for="cep">CEP</label>
                    <input type = "text" name = "cep" placeholder = "CEP" value="<?=utf8_encode($info_tr["cep"]) ?>">
                    <label for="cnpj">CNPJ</label>
                    <input type = "text" name = "cnpj" placeholder = "CNPJ" value="<?=utf8_encode($info_tr["cnpj"]) ?>">
                    <input type = "hidden" name = "transportadoraID" value="<?=utf8_encode($info_tr["transportadoraID"]) ?>">

                    <input type = "submit" value="Confirmar">
                </form>
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