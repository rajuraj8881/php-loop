<?php

// sub = 5-4-3-2-1

    $number = $_GET['n'];
    $sub = $number;

    for($i = $number; $i >= 1; $i--){
        $sub = $sub - ($i-1);
        echo $i." - ";
    }
    echo " = ".$sub;
?>