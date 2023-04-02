<?php

echo "## Este desafio consiste em exibir uma tabuada:" . PHP_EOL . PHP_EOL;

// troque o número da variável $nTabuada para o qual deseja:
$nTabuada = 2;

echo "Este é o resultado da tabuada de $nTabuada:" . PHP_EOL . PHP_EOL;

for ($n = 1; $n <= 10; $n++) {
   echo $nTabuada . " x " . $n . " = " . ($nTabuada * $n) . PHP_EOL;
}


?>
