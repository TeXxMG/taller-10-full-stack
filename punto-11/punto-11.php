<?php
    //VARIABLES
    $sum = 0;

    //PROCESO
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo $i . "\n";
            $sum += $i; 
        }
    }

    //SALIDA
    echo "La suma total es: " . $sum;
?>