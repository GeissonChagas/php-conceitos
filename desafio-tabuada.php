<?php

echo "Este desafio consiste em exibir uma tabuada";

// troque o número da variável $nTabuada para o qual deseja:
$nTabuada = 2;

for ($n = 1; $n <= 10; $n++) {
   echo $nTabuada . " x " . $n . " = " . ($nTabuada * $n) . PHP_EOL;
}

?>
