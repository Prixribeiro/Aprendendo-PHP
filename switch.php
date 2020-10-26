<!--criar um arquivo .php para criar uma estrutura de switch case onde deverá ser informado uma valor numérico ou um símbolo que represente as operação aritmética. As operações a serem executadas são: soma; subtração; multiplicação; divisão e resto da divisão.--> 

<?php
$operacao = "%";
$num1 = 10;
$num2 = 2;

switch($operacao){

    case "+": $operacao = ($num1 + $num2);
    break;
    case "-": $operacao = ($num1 - $num2);
    break;
    case "*": $operacao = ($num1 * $num2);
    break;
    case "/": $operacao = ($num1 / $num2);
    break;
    case "%": $operacao = ($num1 % $num2);
}

echo $operacao;
?>

