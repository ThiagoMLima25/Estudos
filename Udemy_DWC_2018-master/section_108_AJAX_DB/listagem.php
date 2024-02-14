<?php
   // Criar objeto de conexao
   $conecta = mysqli_connect("localhost","root","","udemysql");
   if ( mysqli_connect_errno()  ) {
       die("Conexao falhou: " . mysqli_connect_errno());
   }

   // tabela de transportadoras
   $tr = "SELECT * FROM transportadoras ";
   $consulta_tr = mysqli_query($conecta, $tr);
   if(!$consulta_tr) {
       die("erro no banco");
   }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        
        <style>
            div#janela_transportadoras {
                width:700px;
                margin:60px auto 0;
                border:1px solid #EDEDDC;
                font-family:sans-serif;
                font-size:13px;
                color:#9A9668;
            }
            
            div#janela_transportadoras ul {
                margin:0;padding:0; 
                border-bottom:1px solid #EDEDDC;
            }
            
            div#janela_transportadoras ul:last-child {
                border-bottom:none;
            }
            
            div#janela_transportadoras ul:nth-child(odd) {
                background:#EDEDDC;   
            }
            
            div#janela_transportadoras li {
                list-style:none;
                display:inline-block;
                
            }
            
            div#janela_transportadoras li:nth-child(1) {
                width:380px; 
                padding:8px 4px;
            }

            div#janela_transportadoras li:nth-child(2) {
                width:140px;  
                padding:5px 2px;
            }    
            
            div#janela_transportadoras li:nth-child(3) a {
                color:#9A9668;
                text-align:center;
                padding:0 10px;
            }
            
            div#janela_transportadoras li:nth-child(4) a {
                color:#9A9668;
                text-align:center;
                padding:0 10px;
            }            
        </style>
    </head>

    <body>
        <main>  
            <div id="janela_transportadoras">
                <?php
                    while($linha = mysqli_fetch_assoc($consulta_tr)) {
                ?>
                <ul>
                <li><?php echo utf8_encode($linha["nometransportadora"]) ?></li>
                    <li><?php echo utf8_encode($linha["cidade"]) ?></li>
                    <li><a href="" class="excluir" title="<?= $linha["transportadoraID"]?>">Excluir</a></li>
                </ul>
                <?php
                    }
                ?>
            </div>
        </main>

        <script src="jquery.js"></script>
        <script>
            $("#janela_transportadoras ul li a.excluir").click(function(e){
                e.preventDefault();
                var id = $(this).attr("title");
                var elemento = $(this).parent().parent();

                $.ajax({
                    type: "POST",
                    data: "transportadoraID=" + id,
                    url: "exclusao.php",
                    sync: false
                }).done(function(data){
                    $sucesso = $.parseJSON(data)["sucesso"];
                    if($sucesso){
                        $(elemento).fadeOut();
                    }else{
                    console.log(data);
                        console.log("erro na exclusão");
                    }
                }).fail(function(){
                    console.log("erro no sistema");
                });
            });
        </script>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>