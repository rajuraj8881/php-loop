<?php

// Number = 5:
//      sum = 1 + 2 + 3 + 4 + 5;


    $number = $_GET['n'];
    $sum = 0;

    for($i = 1; $i <= $number; $i++){
        $sum = $sum + $i;
        echo $i." + ";
    }

    echo " = ".$sum.'<br>';
?>