<?php
    function mais5($numero)
    {
        $numero += 5;
        echo $numero;
        echo "<br>";
    }
    
    $a = 3;
    mais5($a); //$a continua valendo 3
    echo $a;
?>