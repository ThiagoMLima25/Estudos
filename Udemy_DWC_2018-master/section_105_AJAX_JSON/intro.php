<?php
    /**
     * O que é JSON? JavaScript Object Notation
     * Desenvolvido focado no compartilhamento de dados
     * onde se tornou um padrão utilizado na web suportado por diversas linguagens
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
                $.getJSON("_json/produtos.json", function(data){
                    var elemento;

                    elemento = "<ul>";
                    $.each(data, function(i, valor){
                        elemento += "<li class='nome'>" + valor.nomeproduto + "</li>";
                        elemento += "<li class='preco'>" + valor.precounitario + "</li>";
                    });
                    elemento += "</ul>";

                    $("#listagem").html(elemento);
                });
            }
        </script>
    </body>
</html>