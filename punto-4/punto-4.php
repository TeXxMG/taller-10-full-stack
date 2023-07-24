<?php 
    //DECLARACION DE VARIABLES
    $firstName = 0;
    $lastName = 0;

    //PROCESO
    echo "Ingrese su nombre: ";
    fscanf(STDIN, "%s", $firstName);

    echo "Ingrese su apellido: ";
    fscanf(STDIN, "%s", $lastName);

    //SALIDA
    echo "Su nombre completo es: " . $firstName . " " . $lastName;
?>