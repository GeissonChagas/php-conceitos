<?php

echo "########################################################################################################################" . PHP_EOL . PHP_EOL;
echo "Exercício 1: Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo." . PHP_EOL . PHP_EOL;


echo "Digite o raio do círculo em metros:" . PHP_EOL;
$raioDoCirculo = readline(); // Lê a entrada do usuário

$calculaArea = (3.14 * ($raioDoCirculo ** 2));

echo "O raio digitado foi: $raioDoCirculo, então a área do círculo é $calculaArea m²";



?>