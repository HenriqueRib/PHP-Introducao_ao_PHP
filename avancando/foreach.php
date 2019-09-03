<?php

$contaCorrente = [
    21042077790 => [
        'titular' => 'Henrique' ,
        'saldo' =>  1000
    ] ,
    41077742090 => [
        'titular' => 'Maria' ,
        'saldo' =>  10000
    ] ,
    21300877790 => ['titular' => 'Alberto' ,
    'saldo' =>  300
    ]
];

foreach ($contaCorrente as  $conta){
    echo $conta['titular'] . PHP_EOL;
}

foreach ($contaCorrente as  $cpf => $conta){
    echo $cpf . PHP_EOL;
}