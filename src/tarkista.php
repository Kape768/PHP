<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Alkuluvun tarkistus</title>
</head>
<body>

<?php

$luku = $_POST["luku"];

$onAlkuluku = true;

if ($luku <= 1) {
    $onAlkuluku = false;
} else {

    for ($i = 2; $i < $luku; $i++) {

        if ($luku % $i == 0) {
            $onAlkuluku = false;
            break;
        }
    }
}

if ($onAlkuluku) {
    echo "<h2>Luku on alkuluku</h2>";
} else {
    echo "<h2>Luku ei ole alkuluku</h2>";
}

?>

<br>
<a href="index2.html">Takaisin</a>

</body>
</html>