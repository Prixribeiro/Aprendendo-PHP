<!--Criar um arquivo .php para criar uma função que multiplique dois valores. É preciso que a função devolva o resultado usando o return.-->

<?php
    function mult($num1, $num2)
    {
        $multval = $num1*$num2;
        return $multval;
    };
    
    $num1=60;
    $num2=5;
    echo mult ($num1, $num2);
?>