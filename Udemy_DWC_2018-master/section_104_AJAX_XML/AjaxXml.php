<?php
    /**
     * O que é XML?
     * -> XML é uma linguagem de marcação;
     * -> Significa eXtensible Markup Language;
     * -> XML se tornou padrão pela W3C em 1998.
     * 
     * Para que usamos o XML?
     * É usado para estruturar e descrever informações
     * XML foi planejado para ser usado pela internet mas é utilizado em diversas atividades
     * 
     * Principal propósito é a comunicação entre sistemas distintos
     * - Serviços baseados em XML
     * -> RSS/ATOM
     * -> WebService
     * -> AJAX
     */
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <button id="btn">Carregar Informações</button>
        <div id="listagem"></div>
        
        <script src="jquery.js"></script>
        <script>
            $("#btn").click(function(){
                $("#listagem").css("display", "block");
                load();
            });

            function load(){
                $.ajax({
                    url:"_xml/produtos.xml"
                }).then(sucesso, falha);

                function sucesso(file){
                    var elemento;
                    elemento = "<ul>";
                        $(file).find("produto").each(function(){
                            var nome = $(this).find('nomeproduto').text();
                            var preco = $(this).find('precounitario').text();
                            elemento += "<li class='nome'>" + nome + "</li>";
                            elemento += "<li class='preco'>" + preco + "</li>";
                        });
                    elemento += "</ul>";

                    $("#listagem").html(elemento);
                }

                function falha(){

                }
            }
        </script>
    </body>
</html>