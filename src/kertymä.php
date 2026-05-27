<?php

$luku = (int) readline("Anna kokonaisluku: ");

$summa = 0;
$i = 0;

while ($i < $luku) {
    $summa += $i;
    $i++;
}

echo "Summa on " . $summa . PHP_EOL;

?>