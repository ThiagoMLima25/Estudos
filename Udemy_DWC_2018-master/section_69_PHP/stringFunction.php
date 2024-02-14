<?php 
    $nomeCompleto = "Thiago Martins de Lima";
    
    //strlen - Retorna a quantidade de letras
    echo strlen("BRASIL")."<br>";

    //stripos - Retorna posição da primeira ocorrência
    echo stripos($nomeCompleto, "a")."<br>";

    //strripos - Retorna posição da última ocorrência
    echo strripos($nomeCompleto, "a")."<br>";

    //strtolower - converte para letras minusculas
    echo strtolower($nomeCompleto)."<br>";

    //strtoupper - converte para letras maiusculas
    echo strtoupper($nomeCompleto)."<br>";

    //SUBSTR_COUNT - conta quantas ocorrências de uma string -> Difere letras maiusculas e minusculas
    echo SUBSTR_COUNT($nomeCompleto, "T")."<br>";
?>