<?php

$conta1 = [
    'nome' => 'sujeito1',
    'saldo' => 1000
];

$conta2 = [
    'nome' => 'sujeito2',
    'saldo' => 2000
];

$conta3 = [
    'nome' => 'sujeito3',
    'saldo' => 3000
];

$contas = [$conta1, $conta2, $conta3];

foreach ($contas as $conta /*chamo aqui a variável de conta*/) {
    echo $conta['nome'] . PHP_EOL;
}
// o código acima irá exibir a cada conta o nome guardado em 'nome'

//abaixo fica um exemplo usando o foreach para acessar o índice atribuindo uma variável

$matricula1 = "123";
$matricula2 = "456";
$matricula3 = "789";

$matriculas = [
    "geisson" => $matricula1,
    "thais" => $matricula2,
    "joao" => $matricula3
];

foreach ($matriculas as $nome => $matricula) {
    echo $nome . "=>" . $matricula . PHP_EOL;
}


?>