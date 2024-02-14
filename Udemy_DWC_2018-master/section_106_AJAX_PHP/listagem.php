<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">

        <script>
            function retornarProdutos(data){
                console.log(data);
            } 
        </script>
    </head>

    <body>
        <button id="btn">Carregar Informações</button>
        <div id="listagem"></div>
        
        <script src="http://127.0.0.1:8080/Udemy_DWC_2018/section_106_AJAX_PHP/gerarJSON.php?callback=retornarProdutos"></script>
        <!-- <script src="jquery.js"></script>
        <script>
            $("#btn").click(function(){
                $("#listagem").css("display", "block");
                load();
            });

            function load(){
                $.getJSON("gerarJSON.php", function(data){
                    var elemento;

                    elemento = "<ul>";
                    $.each(data, function(i, valor){
                        elemento += "<li class='nome'>" + valor.nomeproduto + "</li>";
                        elemento += "<li class='preco'>" + valor.precounitario + "</li>";
                        elemento += "<li class='imagem'><img src='" + valor.imagempequena + "'></li>";
                    });
                    elemento += "</ul>";

                    $("#listagem").html(elemento);
                });
            }
        </script> -->
    </body>
</html>