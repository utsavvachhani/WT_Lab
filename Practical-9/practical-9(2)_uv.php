<?php
    $a = 10;
    $b = 20; 
    $c = 30;
    echo " a = 10; <br>
    b = 20; <br>
    c = 30; <br>";

    if($a > $b && $a>$c){
        echo " Maximum number : ".$a ;
    }
    else{
        if($b > $c){
            echo " Maximum number : ".$b ;
        }
        else{
            echo " Maximum number : ".$c ;
        }
    }
?>
