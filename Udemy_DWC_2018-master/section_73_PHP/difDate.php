<?php
    $dataOld = new DateTime("1993-8-24");
    $dataNew = new DateTime("1993-9-25");

    $intervalo = $dataOld->diff($dataNew);

    print_r($intervalo);
    echo "<br><br>";
    print_r($intervalo->format("%d"));
    echo "<br><br>";
    print_r($intervalo->format("%m"));
    echo "<br><br>";
    print_r($intervalo->format("%a"));
?>