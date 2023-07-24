<?php
    $arrayNumber = array(2, 4, 6, 3, 5);
    $sum = 0;
    
    foreach ($arrayNumber as $number) {
        $sum += $number; 
    }
    
    echo "La suma de los numeros es: " . $sum;
?>