<?php
    function retornarDiaria($salario, $dia) {
        return number_format($salario/$dia, 2);
    }

    function retornarDiariaCotacao($salario, $dia, $cotacao) {
        $real = number_format($salario/$dia, 2);
        $dolar = number_format(($salario/$dia)/$cotacao, 2);
        return array($real, $dolar);
    }

    $diaria = retornarDiaria(8000, 10);
    // $diariaCotacao = retornarDiariaCotacao(8000, 10, 2.5);
    list($real, $dolar) = retornarDiariaCotacao(8000, 10, 2.5);
    
    echo $diaria;
    echo "<br><br>";
    echo "Diaria em R$".$real;
    echo "<br><br>";
    echo "Diaria em $".$dolar;
?>