<?php
    $arrSalada = [
        "Maça",
        "Abacate",
        "Laranja",
    ];

    echo $arrSalada[0]."<br>";
    echo $arrSalada[1]."<br>";
    echo $arrSalada[2]."<br>";

    echo count($arrSalada)."<br>";

    $arrSalada[] = "Kiwi";

    echo count($arrSalada)."<br>";
    print_r($arrSalada);

echo "<br><br>";
echo "<b>Associative Arrays</b><br><br>";    

    $agenda = [
        "nome"      => "Thiago",
        "sobrenome" => "Martins",
        "salario"   => 799.99
    ];

    print_r($agenda);

echo "<br><br>";
echo "<b>Funções de Arrays</b><br><br>";    
    $lost = [
        23,15,16,8,50,7
    ];
    
    echo max($lost)."<br>";
    echo min($lost)."<br>";
    
    echo array_sum($lost)."<br>";

    sort($lost);
    print_r($lost);

echo "<br><br>";
    
    rsort($lost);
    print_r($lost)."<br>";

echo "<br><br>";

    shuffle($lost);
    print_r($lost)."<br>";   

echo "<br><br>";
echo "<b>Procurando um elemento em um array</b><br><br>";

    echo "Existe um elemento?".in_array("Abacate", $arrSalada);
    echo "<br><br>";
    echo "Existe um elemento?".array_search("Laranja", $arrSalada);
?>