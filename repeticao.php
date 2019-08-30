<?php

$contador = 1 ;

while ($contador <= 5) {
    echo "#$contador que chega até 5" .PHP_EOL;
    $contador = $contador + 1;
}
$contador = 1 ;
    echo 'Agora a forma de repetir com o FOR' . PHP_EOL ;
    for ($contador = 1; $contador <=5; $contador ++){
        echo "#$contador que chega até 5" .PHP_EOL;
    }
    echo 'Agora COM BREAK' . PHP_EOL ;
    for ($contador = 1; $contador <=5; $contador = $contador+1){
        if ( $contador === 3) {
            break;
        }
        echo "#$contador que chega até 5" .PHP_EOL;
    }
    echo "Obtvemos o mesmo resultado de formas diferentes" .PHP_EOL;