<?php

$idade = 21 ;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade > 18)  {
    echo "Voce tem $idade anos." . PHP_EOL;
    echo 'Pode entrar' ;
} else {
    echo "Você não tem 18 anos. Você não pode entrar";
}
echo PHP_EOL;
echo 'Adeus' ;