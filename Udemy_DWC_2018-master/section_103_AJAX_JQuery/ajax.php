<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <script src=jquery.js></script>

        <style>
            .curso{
                color:red;
            }
        </style>
    </head>

    <body>
        <div class="curso"></div>
        <div id="nome"></div>
        
        <script>
            $(".curso:first").load("dados.txt");

            //metódo then
            $.ajax({
                url: "nome.php"
            }).then(sucesso, falha);

            function sucesso(valor){
                $("#nome").html(valor);
            }

            function falha(falha){
                $("#nome").html("Falha no carregamento");
            }
        </script>
    </body>
</html>