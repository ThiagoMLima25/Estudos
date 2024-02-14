<?php
    /**
     * O que é AJAX - Assincrono Javascript And Xml
     * Modo tradicional -> Atualiza toda informação do site mesmo que houvesse uma pequena mudança.
     * Modo AJAX -> Atualiza apenas uma parte do site após a requisição
     * 
     * O conceito AJAX foi baseado na API XMLHttpRequest que foi fundamentado pela Microsoft para p produto Outlook web access
     * API XMLHttpRequest
     * -> HTML
     * -> Arquivo TXT
     * -> Arquivo XML
     * -> Arquivo JSON
     * 
     * readyState
     * 0 = Requisição não inicializada
     * 1 = Conexão estabelecida com o servidor
     * 2 = requisição recebida
     * 3 = processando requisição
     * 4 = requisição finalizada
     * 
     * status
     * 200 = OK
     * 404 = Página não encontrada
     */
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Solicitacao</title>
        <script>
            function carregar(){
                var ajax;

                if(window.XMLHttpRequest){
                    ajax = new XMLHttpRequest();
                }else{
                    ajax = new ActiveXObject("Microsoft.XMLHTTP");
                }

                //Assincrona - true | Sincrona - false
                ajax.open("GET", "dados.txt", true);
                ajax.onreadystatechange = function(){
                    if(ajax.status == 200){
                        if(ajax.readyState == 3){
                            console.log("Carregando");
                        }

                        if(ajax.readyState == 4){
                            console.log("Carregado com sucesso");
                            console.log(ajax.responseText);

                            var elemento = document.getElementById("dinamico");
                            elemento.innerHTML = ajax.responseText;

                            var titulo = document.getElementsByTagName("h1")[0].innerHTML = ajax.responseText; 
                        }
                    }else{
                        console.log("Erro na operação");
                    }
                }
                ajax.send();
                console.log(ajax);
            }
        </script>
    </head>

    <body>
        <button id="btn" onclick="carregar()">Carragar AJAX</button>
        <div id="dinamico"></div>
        <h1></h1>
    </body>
</html>