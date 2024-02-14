<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <script src=jquery.js></script>
    </head>

    <body>
        <div id="nome"></div>
        <div id="msg"></div>
        
        <script>
            $.ajax({
                url: "nome.php"
            }).done(function(valor){
                $("#nome").html(valor);
            }).fail(function(){
                $("#nome").html("Falha no carregamento");
            }).always(function(){
                $("#msg").html("Mensagem independente do sucesso ou falha");
            });
        </script>
    </body>
</html>