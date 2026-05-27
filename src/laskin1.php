<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tulokset</title>
</head>
<body>

<h2>Laskutoimitusten tulokset</h2>

<?php

$luku1 = $_POST["luku1"];
$luku2 = $_POST["luku2"];

$summa = $luku1 + $luku2;
$keskiarvo = $summa / 2;

echo "Ensimmäinen luku: " . $luku1 . "<br>";
echo "Toinen luku: " . $luku2 . "<br><br>";

echo "Summa on: " . $summa . "<br>";
echo "Keskiarvo on: " . $keskiarvo;

?>

</body>
</html>