<!-- Criar um arquivo .php para que uma determinada tabuada seja exibida. O valor a ser calculado deverá ser informado no programa. 
exemplo: 3 x 0 = 0
3 x 1 = 3
3 x 2 = 6 
3 x 3 = 9
O intervalo de cálculo será do 0 até 0 10-->

<?php
$tabuada = 8;
$contador = 0;


while ($contador<=10) {
    $resultado = $tabuada*$contador;
    echo "{$tabuada} x {$contador} = {$resultado}<br>";
    $contador++;
    
}
?>