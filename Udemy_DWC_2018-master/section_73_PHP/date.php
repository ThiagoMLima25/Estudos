<?php
    //Determinar Timezone
    // date_default_timezone_set("Etc/GMT+3");
    date_default_timezone_set("America/Sao_Paulo");
    setlocale(LC_TIME,"pt_BR");

    $agora = getdate();
    print_r($agora);

    //Criar Elementos
    $ano = $agora["year"]; 
    $mes = $agora["mon"];
    $mesName = strftime("%B");
    $dia = $agora["mday"];

    $hora = $agora["hours"]; 
    $minuto = $agora["minutes"];
    $segundo = $agora["seconds"];

    echo "<br><br>";

    echo $dia ."/". $mes ."/". $ano ." - ". $hora .":". $minuto .":". $segundo;
    echo "<br><br>";
    echo $dia ." de ". $mesName ." de ". $ano ." - ". $hora .":". $minuto .":". $segundo;

?>