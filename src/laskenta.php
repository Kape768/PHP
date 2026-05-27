<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Laskennan tulos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Laskennan tulokset</h1>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $matka = $_POST["matka"];
    $kulutus = $_POST["kulutus"];
    $hinta = $_POST["hinta"];
    $polttoaine = $_POST["polttoaine"];

    // Kulutetut litrat
    $litrat = ($matka * $kulutus) / 100;

    // Kokonaiskustannus
    $kustannus = $litrat * $hinta;

    // Litraa per kilometri
    $litraaPerKm = $kulutus / 100;

    echo "<div class='tulos'>";

    echo "<p><strong>Polttoainetyyppi:</strong> $polttoaine</p>";

    echo "<p>Kulutettu polttoaine: " . number_format($litrat, 2) . " litraa</p>";

    echo "<p>Kulutus per kilometri: " . number_format($litraaPerKm, 3) . " l/km</p>";

    echo "<p>Kokonaiskustannus: " . number_format($kustannus, 2) . " €</p>";

    echo "</div>";
}

?>

<br>
<a href="index.php">Takaisin</a>

</body>
</html>