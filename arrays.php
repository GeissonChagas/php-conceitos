<?php 
// Sintaxes do array utilizando exemplo de idades: 

$idades = [21, 19, 18, 15, 22, 25, 28, 29]; 
$idades = array(21, 19, 18, 15, 22, 25, 28, 29); 



// Como captar índices no array:
$primeiraIdade = $idades[0];

// Arrays associativos:
$conta = [
    'nome' => 'Geisson', // para acessar a chave de 'nome', ficaria assim: $conta['nome'] que retornaria ao nome 'Geisson'.
    'saldo' => 100000000 // para acessar a chave de 'saldo', ficaria assim: $conta['saldo'] que retornaria ao saldo de '100000000'.
]

// É possível também inserir arrays associativos dentro de um array comum, por exemplo:

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

$contas = [$conta1; $conta2; $conta3];
// para acessar a nome da conta1 ficaria assim: $contas[0]['nome']


?>