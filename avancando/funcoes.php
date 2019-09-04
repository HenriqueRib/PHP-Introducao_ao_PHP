<?php
function titularComLetrasMaiusculas ( &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

// Funçao que retorna um valor

//function soma($x){
//    return $x + 2;
//}
//$resultado = soma(-2) ;
//echo "$resultado - " ;

function sacar($conta , $valorasacar){
    if ($valorasacar > $conta['saldo']){
        exibemensagem("Voce não pode sacar");
    } else {
        $conta['saldo'] -= $valorasacar ;
    }
    return $conta ;
}
// Sub rotinas
function exibemensagem ($mensagem){
    echo $mensagem . '<br>' ;
}
// Sub rotinas sem parametro
function apresentação (){
    echo 'Seja bem-vindo ao nosso Banco' . '<br>';
}

