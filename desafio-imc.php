<?php
echo "## Este desafio consiste em fazer o cálculo de IMC:" . PHP_EOL . PHP_EOL;

// sabendo que o cálculo de IMC é feito através da seguinte fórmula: peso/altura^2

// digite aqui o peso em (kg):
$peso = 60;

//digite aqui a altura em (m):
$altura = 1.80;

$imc = ($peso/($altura ** 2));

echo "O IMC de uma pessoa com $peso kg e $altura m de altura é $imc e está ";

if ($imc < 18.5){
    echo "abaixo do recomendado!";
} elseif ($imc < 25 ) {
    echo "ideal!";
} else {
    echo "acima do recomendado!";
}



?>