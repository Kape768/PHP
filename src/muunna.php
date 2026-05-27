<?php

if (!isset($_POST["lampotila"]) || $_POST["lampotila"] === "") {
    die("Virhe: Lämpötila puuttuu.");
}

if (!isset($_POST["muunnos"])) {
    die("Virhe: Valitse muunnossuunta.");
}

$lampotila = $_POST["lampotila"];
$muunnos = $_POST["muunnos"];

if (!is_numeric($lampotila)) {
    die("Virhe: Lämpötilan täytyy olla numero.");
}

$lampotila = floatval($lampotila);

if ($muunnos == "cf") {

    if ($lampotila < -40 || $lampotila > 40) {
        die("Virhe: Celsius-lämpötilan pitää olla välillä -40 – +40 °C.");
    }

    $fahrenheit = ($lampotila * 9 / 5) + 32;

    echo "<h1>Tulos</h1>";
    echo round($lampotila, 2) . " °C = " . round($fahrenheit, 2) . " °F";
}

elseif ($muunnos == "fc") {

    $celsius = ($lampotila - 32) * 5 / 9;

    if ($celsius < -40 || $celsius > 40) {
        die("Virhe: Muunnetun Celsius-lämpötilan pitää olla välillä -40 – +40 °C.");
    }

    echo "<h1>Tulos</h1>";
    echo round($lampotila, 2) . " °F = " . round($celsius, 2) . " °C";
}

else {
    echo "Virhe: Tuntematon muunnostapa.";
}

?>