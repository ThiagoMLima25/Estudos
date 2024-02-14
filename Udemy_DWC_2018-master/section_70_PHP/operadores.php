<?php
    //Operadores de Comparação
    $salario = 800;
    $premio = "800";

    if($salario == $premio){
        echo "Salário é igual ao prêmio";
    }else{
        echo "Salário não é igual ao prêmio";
    }

echo "<br><br>";
    
    if($salario === $premio){
        echo "Salário é idêntico ao prêmio";
    }else{
        echo "Salário não é idêntico ao prêmio";
    }

echo "<br><br>";

    $fumante = true;

    if($fumante){
        echo "Você é fumante";
    }else{
        echo "Você não é fumante";
    }
?>