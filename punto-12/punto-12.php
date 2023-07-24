<?php
    $number = 0;

    echo "Ingrese el numero a multiplicar: ";
    fscanf(STDIN, "%d", $number);

    for ($i = 0; $i <= 30; $i++) {
        echo $number . " X " . $i . " = " . $number * $i . "\n";
    }
?>