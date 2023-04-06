<?php

echo "########################################################################################################################" . PHP_EOL . PHP_EOL;
echo "Exercício 1: Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo." . PHP_EOL . PHP_EOL;


echo "Digite o raio do círculo em metros:" . PHP_EOL;
$raioDoCirculo = readline(); // Lê a entrada do usuário

$calculaArea = (3.14 * ($raioDoCirculo ** 2));

echo "O raio digitado foi: $raioDoCirculo, então a área do círculo é $calculaArea m²" . PHP_EOL . PHP_EOL;

echo "########################################################################################################################" . PHP_EOL . PHP_EOL;
echo "Exercício 2: Faça um script que peça um número e então mostre a mensagem O número informado foi [número]." . PHP_EOL . PHP_EOL;

echo "Digite o numero:" . PHP_EOL;
$numeroPedido = readline();

echo "O número pedido foi $numeroPedido" . PHP_EOL . PHP_EOL;

echo "########################################################################################################################" . PHP_EOL . PHP_EOL;
echo "Exercício 3: Faça um script que peça dois números e imprima a soma." . PHP_EOL . PHP_EOL;

echo "Digite o primeiro número:" . PHP_EOL;
$n1 = readline();
echo "Digite o segundo número:" . PHP_EOL;
$n2 = readline() . PHP_EOL . PHP_EOL;

$soma = $n1 + $n2;

echo "A soma dos números é igual a $soma!" . PHP_EOL . PHP_EOL;

echo "########################################################################################################################" . PHP_EOL . PHP_EOL;
echo "Exercício 4: Faça um script que peça 3 notas de um aluno e mostra sua média." . PHP_EOL . PHP_EOL;

echo "Digite a primeira nota:" . PHP_EOL;
$nota1 = readline();

echo "Digite a segunda nota:" . PHP_EOL;
$nota2 = readline();

echo "Digite a terceira nota:" . PHP_EOL;
$nota3 = readline();

$media = ($nota1 + $nota2 + $nota3)/3;
echo "A média das três notas é: $media" . PHP_EOL . PHP_EOL;

echo "########################################################################################################################" . PHP_EOL . PHP_EOL;
echo "Exercício 5: Faça um script que converta metros para centímetros." . PHP_EOL . PHP_EOL;

echo "Digite o valor que deseja converter de metros para centímetros:" ;

$nMetros = readline();
$nConvertido = ($nMetros * 100);

echo "O valor digitado ($nMetros) em metros equivale a $nConvertido centímetros!";

echo "########################################################################################################################" . PHP_EOL . PHP_EOL;
echo "Exercício 6: Faça um script que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário." . PHP_EOL . PHP_EOL;

echo "Digite aresta do quadrado em m: ";
$lado = readline();

$areaQuadrado = ($lado ** 2);
echo "A área do quadrado com os lados igual a $lado m é igual a $areaQuadrado m²! "

?>
