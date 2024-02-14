<header>
    <div id="header_central">
        <?php
            if(isset($_SESSION["user"])){
                $user = $_SESSION["user"];

                $saudacao = "SELECT nomecompleto ";
                $saudacao .= "FROM clientes ";
                $saudacao .= "WHERE clienteID = {$user} ";

                $saudacao_login = mysqli_query($con, $saudacao);
                if(!$saudacao_login){
                    die("Falha de consulta ao banco");
                }

                $saudacao_login = mysqli_fetch_assoc($saudacao_login);
                $nome = $saudacao_login["nomecompleto"];
        ?>
            <div id="header_saudacao">
                <h5><b>Bem vindo, <?php echo $nome ?></b></h5>
                - <a href="logout.php">Logout</a>
            </div>
        <?php
            }
        ?>
        <img src="assets/logo_andes.gif">
        <img src="assets/text_bnwcoffee.gif">
    </div>
</header>