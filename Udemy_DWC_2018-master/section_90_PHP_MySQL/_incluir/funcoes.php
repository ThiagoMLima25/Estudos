<?php
    function mostrarAvisoPublicacao($numero)
    {
        $array_erro = array(
            UPLOAD_ERR_OK => "Sem erro.",
            UPLOAD_ERR_INI_SIZE => "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
            UPLOAD_ERR_FORM_SIZE => "O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML",
            UPLOAD_ERR_PARTIAL => "O upload do arquivo foi feito parcialmente.",
            UPLOAD_ERR_NO_FILE => "Nenhum arquivo foi enviado.",
            UPLOAD_ERR_NO_TMP_DIR => "Pasta temporária ausente.",
            UPLOAD_ERR_CANT_WRITE => "Falha em escrever o arquivo em disco.",
            UPLOAD_ERR_EXTENSION => "Uma extensão do PHP interrompeu o upload do arquivo."
        );

        return $array_erro[$numero];
    }

    function publicar($imagem){
        $arquivo_temp = $imagem["tmp_name"];
        $arquivo = basename($imagem["name"]);
        $diretorio = "uploads";

        if(move_uploaded_file($arquivo_temp, $diretorio."/".$arquivo)){
            $mensagem = "Arquivo Publicado";
        }else{
            $mensagem = mostrarAvisoPublicacao($imagem["error"]);
        }

        return $mensagem;
    }

    function gerarCodigoUnico() {
        $alfabeto   = "23456789ABCDEFJGHJKMNPQRS";
        $tamanho    = 30;
        $letra      = "";
        $resultado  = "";

        for ($i = 1; $i < $tamanho ; $i++ ) {
            $letra      = substr( $alfabeto, rand(0,23), 1); 
            $resultado  .= $letra;
        }

        date_default_timezone_set('America/Recife');
        $agora = getdate();

        $codigo_data = $agora['year'] . "_" . $agora['yday'];
        $codigo_data .= $agora['hours'] . $agora['minutes'] . $agora['seconds'];
        return "foto_" . $codigo_data . "_" . $resultado;
    }

    function getExtensao($nome) {
        return strrchr($nome,".");
    }

    function publicarImagem($imagem) {
        $arquivo_temporario = $imagem['tmp_name'];
        $nome_original      = $imagem['name'];
        $nome_novo          = gerarCodigoUnico() . getExtensao($nome_original);
        $nome_completo      = "images/product_images/" . $nome_novo;
        
        if(move_uploaded_file($arquivo_temporario, $nome_completo)) {
            return array("Imagem publicada com sucesso",$nome_completo);   
        } else {
            return array(retornarErro($imagem['error']),"");            
        }        
    }

    function retornarErro($numero_erro) {
        $array_erro = array(
            UPLOAD_ERR_OK =>            "Sem erro.",
            UPLOAD_ERR_INI_SIZE =>      "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
            UPLOAD_ERR_FORM_SIZE =>     "O arquivo excede o limite máximo de 600Kb.",
            UPLOAD_ERR_PARTIAL =>       "O upload do arquivo foi feito parcialmente.",
            UPLOAD_ERR_NO_FILE =>       "Nenhum arquivo foi enviado.",
            UPLOAD_ERR_NO_TMP_DIR =>    "Pasta temporária ausente.",
            UPLOAD_ERR_CANT_WRITE =>    "Falha em escrever o arquivo em disco.",
            UPLOAD_ERR_EXTENSION =>     "Uma extensão do PHP interrompeu o upload do arquivo."
        ); 
        
        return $array_erro[$numero_erro];
    }

    function enviarMensagem($dados){
        //Dados do Formulário
        $nome_usuario   = $dados["nome"];
        $email_usuario  = $dados["email"];
        $msg_usuario    = $dados["mensagem"];

        //Criar variaveis de envio
        $destino    = "thiagolima0993@gmail.com";
        $remetente  = "email do dominio";
        $assunto    = "mensagem do site";

        //Corpo da mensagem
        $mensagem   = "O usuário ". $nome_usuario. "enviou uma mensagem <br>";
        $mensagem   .= "Email do usuário". $email_usuario ."<br>";
        $mensagem   .= "Mensagem:<br>";
        $mensagem   .= $msg_usuario;

        return mail($destino, $assunto, $mensagem, $remetente);
    }
?>