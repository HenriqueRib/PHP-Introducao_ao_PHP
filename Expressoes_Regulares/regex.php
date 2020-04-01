<?php
/*
'/^ (inicia)
(termina)/i(case sensitive)'
[0-9] numeros
{1,5} quantidade . de 1 até 5
? = {0,1}
* = {0,}
+ = {1,}
*/
$string ='aBc';

if(preg_match('/^abc/i',$string)){
    echo 'Accept' . PHP_EOL;
}else{
    echo 'Error' . PHP_EOL;
}