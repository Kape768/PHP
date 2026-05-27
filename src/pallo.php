<?php

function laskeTilavuus($sade)
{
    $pii = 3.1415927;

    $tilavuus = (4 * $pii * pow($sade, 3)) / 3;

    return $tilavuus;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sade = $_POST["sade"];

    $tilavuus = laskeTilavuus($sade);

    echo "<h1>Pallon tilavuus</h1>";
    echo "Syötetty säde: " . $sade . " cm<br><br>";
    echo "Laskettu tilavuus: " . number_format($tilavuus, 2) . " cm³";
}

?>