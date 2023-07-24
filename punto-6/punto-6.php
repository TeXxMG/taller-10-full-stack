<?php
    //VARIABLES
    $firstName = "";
    $lastName = "";
    $age = 0;
 
    //PROCESO
    echo "Ingrese su nombre: ";
    fscanf(STDIN, "%s", $firstName);
    
    echo "Ingrese su apellido: ";
    fscanf(STDIN, "%s", $lastName);

    echo "Ingrese su edad: ";
    fscanf(STDIN, "%d", $age);

    if ($age >= 18) {
        echo $firstName . " " . $lastName . " " . "Usted es mayor de edad";
    } else {
        echo $firstName . " " . $lastName . " " . "Usted no es mayor de edad";
    }
?>