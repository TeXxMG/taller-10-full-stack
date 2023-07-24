<?php
    function suma($num1, $num2) {
        return $num1 + $num2;
    }
        
    function resta($num1, $num2) {
        return $num1 - $num2;
    }
    
    function multiplicacion($num1, $num2) {
        return $num1 * $num2;
    }
    
    function division($num1, $num2) {
        if ($num1 > 0 && $num2 > 0) {
            return $num1 / $num2;
        } else {
            echo "Numeros digitados invalidos\n";
            return 0;
        }
    }
    
    $firstNumber = 0;
    $secondNumber = 0;
    $operationType = 0;
    $result = 0;
    
    echo "Ingrese un numero: ";
    fscanf(STDIN, "%d", $firstNumber);
    
    echo "Ingrese otro numero: ";
    fscanf(STDIN, "%d", $secondNumber);
    
    echo "Elija el tipo de operacion: \n";
    echo "1 - Suma\n";
    echo "2 - Resta\n";
    echo "3 - Multiplicacion\n";
    echo "4 - Division\n";
    fscanf(STDIN, "%d", $operationType);

        switch ($operationType) {
            case 1:
                $result = suma($firstNumber, $secondNumber);
                break;
            case 2:
                $result = resta($firstNumber, $secondNumber);
                break;
            case 3:
                $result = multiplicacion($firstNumber, $secondNumber);
                break;
            case 4:
                $result = division($firstNumber, $secondNumber);
                break;
            default:
                echo "Operacion invalida.";
        }
        
    echo "El resultado de la operacion es: " . $result;
?>