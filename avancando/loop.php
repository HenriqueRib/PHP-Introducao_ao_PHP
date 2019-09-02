<?php

$idadelista = [ 21, 31, 35 , 36 , 37 , 399 , 24] ;

echo count($idadelista) . PHP_EOL ; //Conta o vetor

for ($i = 0; $i < count($idadelista); $i++)
    echo $idadelista[$i] . PHP_EOL ;

echo "Teste" . PHP_EOL ;

for ($i = 0; $i < 6; $i++)
    echo $idadelista[$i] . PHP_EOL ;