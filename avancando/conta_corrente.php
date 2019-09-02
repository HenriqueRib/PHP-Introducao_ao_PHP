<?php

$conta1 = [
    'titular' => 'Henrique' ,
    'saldo' =>  1000
] ;
$conta2 = [
    'titular' => 'Maria' ,
    'saldo' =>  10000
] ;
$conta3 = [
    'titular' => 'Alberto' ,
    'saldo' =>  300
] ;

$contaCorrente = [ $conta1,$conta2,$conta3];

for ($i = 0; $i < count($contaCorrente); $i++)
    echo  'Nome:' . $contaCorrente[$i]['titular'] . " Saldo " . $contaCorrente[$i]['saldo'] . PHP_EOL ;
