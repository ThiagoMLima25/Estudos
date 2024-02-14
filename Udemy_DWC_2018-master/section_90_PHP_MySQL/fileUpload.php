<?php
   /** 
    * Configuração do PHP.INI para Uploads
    *   -> file_uploads = tem que estar ON ou TRUE;
    *   -> uplad_tmp_dir = Pasta de arquivos temporários  que serão publicados;
    *   -> post_max_size (128MB) = Define tamanho máximo de dados de postagem que são permitidos. Para enviar arquivos maiores ele deve possuir valor superior ao upload_max_filesize;
    *   -> upload_max_filesize (128MB) = Define o tamanho máximo do arquivo;
    *   -> max_execution_time (30s) = Define tempo máximo em segundos que é permitido rodar antes de ser finalizado pelo interpretador;
    *   -> max_input_time (60s) = Define o tempo máximo em segundos que é permitido análisar dados de entreda como GET ou POST é medido a partir do momento da recepção de todos os dados do servido para início da execução do script;
    *   -> memory_limit (128MB) = Define o tamanho máximo de memória.
    */
    require_once("connection/connection.php"); 
    require_once("_incluir/funcoes.php"); 
    session_start();

    if(isset($_POST["enviar"])){

        echo "<pre>";
        print_r($_FILES["upload"]);
        echo "</pre>";
        echo "<br>";

       $mensagem = publicar($_FILES["upload"]);
    }
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <style>
            input { display:block; margin-bottom:15; }
        </style>
    </head>

    <body>
        <header>
            <div id="header_central">
                <?php include_once("_incluir/topo.php"); ?>
            </div>
        </header>
        
        <main>
            <form action="fileUpload.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="600000">
                <input type="file" name="upload">
                <input type="submit" name="enviar" value="publicar">
            </form>
            <?php
                if(isset($mensagem)) {
                    echo $mensagem;
                }
            ?>
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