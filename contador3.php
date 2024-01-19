<?php

$contador = 0;

if ($fd = fopen('counter.txt', 'r')) {
    $contador = fgets($fd);
    fclose($fd);
}

$fd2 = fopen('counter.txt', 'w');
$contador = $contador + 1; // Corrected variable name from $countador to $contador
fwrite($fd2, $contador);
fclose($fd2);
echo $contador;

?>