<?php

include 'funcoes.php';

apresentação();

$contaCorrente = [
    21042077790 => [
        'titular' => 'Henrique' ,
        'saldo' =>  1000
    ],
    41077742090 => [
        'titular' => 'Maria' ,
        'saldo' =>  10000
    ],
    21300877790 => ['titular' => 'Alberto' ,
        'saldo' =>  300
    ]
];
// exibemensagem chama a subrotina
foreach ($contaCorrente as  $conta){
    exibemensagem("Nome:" .$conta['titular']  ." Saldo = " . $conta['saldo']);
}

echo PHP_EOL ;

//Aplicando uma subtração no saldo

$contaCorrente [41077742090]['saldo']-=500;

foreach ($contaCorrente as  $cpf => $conta){
    echo "Nome:" .$conta['titular']  ." Cpf:" .$cpf ." Saldo = " . $conta['saldo'] . PHP_EOL;
}

echo "Nome:$conta[titular] Cpf: $cpf Saldo =$conta[saldo]" . PHP_EOL;

echo "Nome:{$conta['titular']} Cpf: $cpf Saldo ={$conta['saldo']}" . PHP_EOL;

echo exibemensagem("Efetuando um saque") ;


$contaCorrente [41077742090] = sacar($contaCorrente [41077742090],350);

foreach ($contaCorrente as  $cpf => $conta){
    echo "Nome:" .$conta['titular']  ." Cpf:" .$cpf ." Saldo = " . $conta['saldo'] . PHP_EOL;
}