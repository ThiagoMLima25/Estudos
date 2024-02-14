<?php
    $salario = 1200;
    $meses = 3;
    $gasolina = 2.79;
    $alcool = 2.49;
    $nome = "Thiago"
;    //Multiplicação e Divisão
    echo "Trimestre: ".$salario * $meses."<br>";
    echo "Quinzena: ".$salario / 2 ."<br>";

    //Exponencial
    echo "Exponencial: ". pow(2,2) ."<br>";

    //Raiz Quadrada
    echo "Raiz Quadrada: ". sqrt(36) ."<br>";

    //Randômico Genérico
    echo "Randômico: ". rand() ."<br>";

    //Randômico entre intervalo
    echo "Randômico: ". rand(1, 10) ."<br>";

    //Valor absoluto
    echo "Absoluto: ". abs(210) ."<br><br>";

    //Testa se é número
    echo "O ". $salario ." é um número? ".is_numeric($salario)."<br>";
    echo "O ". $gasolina ." é um número? ".is_numeric($gasolina)."<br>";
    echo "O ". $nome ." é um número? ".is_numeric($nome)."<br><br>";

    echo "O ". $salario ." é um inteiro? ".is_int($salario)."<br>";
    echo "O ". $gasolina ." é um inteiro? ".is_int($gasolina)."<br><br>";

    echo "O ". $salario ." é um float? ".is_float($salario)."<br>";
    echo "O ". $gasolina ." é um float? ".is_float($gasolina)."<br>";

    echo round($gasolina,1)."<br>";
    echo round($alcool)."<br>";

    echo floor($gasolina)."<br>";
    echo ceil($alcool)."<br>";
?>