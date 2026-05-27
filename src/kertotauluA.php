<?php

$luku = (int) readline("Anna luku: ");

for ($i = 1; $i <= 20; $i++) {
    echo $i . " * " . $luku . " = " . ($i * $luku) . PHP_EOL;
}

?>