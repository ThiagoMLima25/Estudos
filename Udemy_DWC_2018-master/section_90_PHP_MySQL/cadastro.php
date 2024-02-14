<?php
    require_once("connection/connection.php");
    
    //iniciar sessão
    session_start();
    
    if(isset($_POST["nometransportadora"])){
        $nome = $_POST["nometransportadora"];
        $endereco = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];

        $inserir = "INSERT INTO transportadoras (nometransportadora, endereco, telefone, cidade, estadoID, cep, cnpj) VALUES ('$nome', '$endereco', '$telefone', '$cidade', $estado, '$cep', '$cnpj')";
        $operacaoInserir = mysqli_query($con, $inserir);

        if(!$operacaoInserir){
            die("Erro ao Inserir ao banco");
        }
    }

    $select = "SELECT estadoID, nome FROM estados";
    $listEstados = mysqli_query($con, $select);

    if(!$listEstados){
        die("Erro de consulta no banco");
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/crud.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <?php include_once("_incluir/topo.php"); ?>
            </div>
        </header>
        
        <main>
            <div id="janela_formulario">
                <form action="cadastro.php" method="POST">
                    <input type = "text" name = "nometransportadora" placeholder = "Nome da Transportadora">
                    <input type = "text" name = "endereco" placeholder = "Endereço">
                    <input type = "text" name = "telefone" placeholder = "Telefone">
                    <input type = "text" name = "cidade" placeholder = "Cidade">
                    <select name="estado">
                        <?php
                            while($linha = mysqli_fetch_assoc($listEstados)){
                                echo "<option value=". $linha["estadoID"] .">". utf8_encode($linha["nome"]) ."</option>";
                            }
                        ?>
                    </select>
                    
                    <input type = "text" name = "cep" placeholder = "CEP">
                    <input type = "text" name = "cnpj" placeholder = "CNPJ">
                    <input type = "submit" value="inserir">
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