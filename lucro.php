<!--Um comerciante comprou um produto por um determinado valor e quer vendê-lo com lucro de 45% se o valor do produto comprado pelo comerciante for menor que 40,00; caso contrário, o lucro sobre a venda será de 30%. informar valor do produto e informar o nome do comprador do produto. Após a verificação com base no valor do produto, exibir o nome do comprador e o valor da venda atualizado.-->

<?php

$produto = 15.00;
$comprador = "Priscila";

if ($produto <= 40.00)
{
    $lucro = $produto * 0.45;
    $vendaatualizada = $produto + $lucro;
    echo $comprador. "<br> O valor total da sua compra é: R$" .$vendaatualizada;
}
else {
    $lucro = $produto * 0.30;
    $vendaatualizada = $produto + $lucro;
    echo "{$comprador} <br> O valor total da sua compra é: R$ {$vendaatualizada}";
}
