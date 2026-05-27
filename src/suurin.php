<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Suurin luku</title>
</head>
<body>

<?php

$luku1 = $_POST["luku1"];
$luku2 = $_POST["luku2"];
$luku3 = $_POST["luku3"];

// Selvitetään suurin luku
$suurin = max($luku1, $luku2, $luku3);

echo "<h2>Suurin luku on: " . $suurin . "</h2>";

?>

<br>
<a href="index3.html">Takaisin</a>

</body>
</html>