<?php
    $contador = 1;

    while($contador <= 6){
        $sorteio = rand(1, 60);
        echo $sorteio." ";
        $contador++;
    }

echo "<br><br>";
    
    $contador = 1;
    do{
        $sorteio = rand(1, 10);
        echo $sorteio." ";
        $contador++;
    } while($contador <= 6);

echo "<br><br>";

    for ($contador = 1; $contador < 5; $contador++) { 
        $sorteio = rand(1, 10);
        echo $sorteio." ";
    }

echo "<br><br>";
    $salada = [
        "Maça",
        "Abacate",
        "Banana",
        "Laranja",
        "Uva"
    ];

    foreach ($salada as $fruta) {
       echo $fruta."<br>";
    }

echo "<br>";

    $agenda = [
        "nome"      => "Thiago",
        "sobrenome" => "Martins",
        "idade"     => 25
    ];

    foreach ($agenda as $atributo => $valor) {
        echo $atributo.": ".$valor."<br>";
     }
?>