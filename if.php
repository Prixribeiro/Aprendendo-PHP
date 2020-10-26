<!-- Criar um programa em PHP para verificar os lados de um triângulo.
Informar valores para as variáveis e através de uma estrutura de controle exibir a informação do nome do triângulo.
Atividade com 15minutos de duração.

Escaleno: todos os lados são diferentes
Isósceles: Apenas dois lados são iguais
Equilátero: Todos os lados são iguais -->

<?php 
    $a = 10;
    $b = 30;
    $c = 20; 

    if ($a == $b and $b == $c and $c == $a)
    {
        echo " Equilátero: Todos os lados são iguais";
    }
    else if ($a == $b or $b == $c or $c == $a)
    {
        echo " Triangulo Isóceles: apenas 2 lados são iguais";
    }
    else
    {
        echo "Escaleno: todos os lados são diferentes";
    }
?>