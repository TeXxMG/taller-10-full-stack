<?php 
    //CONSTANT
    const TICKET_PRICE = 25000;

    //VARIABLES
    $membershipType = "";
    $personNumber = 0;
 
    //PROCESO
    echo "Ingrese su tipo de afiliación: ";
    fscanf(STDIN, "%s", $membershipType);

    echo "Ingrese el numero de personas: ";
    fscanf(STDIN, "%d", $personNumber);

    $totalPay = $personNumber * TICKET_PRICE;

    $membershipUpper = strtoupper($membershipType);
    

    if ($membershipUpper == 'A' || $membershipUpper == 'B') {
        $totalPay -= $totalPay * 0.3;
    } else {
        echo "Usted no cuenta con afiliación\n";
    }

    //SALIDA
    echo "El valor a pagar es: " . $totalPay;
?>