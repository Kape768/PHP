<?php

// Oikeat tunnukset
$oikea_kayttaja = "opiskelija";
$oikea_salasana = "salasana123";

// Lomakkeelta saadut tiedot
$kayttaja = $_POST["kayttaja"];
$salasana = $_POST["salasana"];

// Tarkistus
if ($kayttaja == $oikea_kayttaja && $salasana == $oikea_salasana) {

    echo "<h2>Kirjautuminen onnistui</h2>";

} else {

    echo "<h2>Kirjautuminen epäonnistui</h2>";
}

?>