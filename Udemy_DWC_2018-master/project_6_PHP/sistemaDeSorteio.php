<?php
    $megaSena = [];
    $contador = 1;

    while($contador < 7){
        $sorteio = rand(1, 60);
        if(!in_array($sorteio, $megaSena)){
            $megaSena[] = $sorteio;
            $contador++;            
        }
    }
    
    sort($megaSena);
    print_r($megaSena);
?>