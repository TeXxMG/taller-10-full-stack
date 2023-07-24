<?php 
    //DECLARACION DE VARIABLES
    $firstNumber = 0;
    $secondNumber = 0;

    //PROCESO
    echo "Ingrese un numero: ";
    fscanf(STDIN, "%d", $firstNumber);

    echo "Ingrese otro numero: ";
    fscanf(STDIN, "%d", $secondNumber);

    //SALIDA
    echo "El resultado de la suma es: " . $firstNumber + $secondNumber;
?>