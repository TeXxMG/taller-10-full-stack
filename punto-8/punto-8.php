<?php
    //CONSTANT
    const TICKET_PRICE = 25000;

    //VARIABLES
    $membershipType = "";
    $personNumber = 0;

    echo "Ingrese el tipo de afiliación: ";
    fscanf(STDIN, "%s", $membershipType);

    echo "Ingrese el numero de personas: ";
    fscanf(STDIN, "%d", $personNumber);

    $membershipUpper = strtoupper($membershipType);

    $totalPay = $personNumber * TICKET_PRICE;

    switch ($membershipUpper) {
        case 'A':
            $totalPay -= $totalPay * 0.3;
            break;
        case 'B':
            $totalPay -= $totalPay * 0.25;
            break;
        case 'C':
            $totalPay -= $totalPay * 0.10;
            break;
        case 'D':
            $totalPay -= $totalPay * 0.05;
            break;
        default:  
            echo "Usted no cuenta con afiliación\n";
    }   

    //SALIDA
    echo "El valor a pagar es: " . $totalPay;
?>