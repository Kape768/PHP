<?php

$luku = (int) readline("Anna luku: ");

$i = 1;

while ($i <= 20) {
    echo $i . " * " . $luku . " = " . ($i * $luku) . PHP_EOL;
    $i++;
}

?>