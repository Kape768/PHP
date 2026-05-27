<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Äänioikeuden tarkistus</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Tarkistetaan että kenttä ei ole tyhjä
    if (empty($_POST["ika"]) && $_POST["ika"] !== "0") {

        echo "<p>Et syöttänyt ikää.</p>";

    } else {

        // Tarkistetaan että syöte on kokonaisluku
        $ika = filter_var($_POST["ika"], FILTER_VALIDATE_INT);

        if ($ika === false) {

            echo "<p>Syötteen täytyy olla kokonaisluku.</p>";

        } else {

            if ($ika < 0) {

                echo "<p>Virhe: negatiivinen ikä.</p>";

            } elseif ($ika < 18) {

                echo "<p>Olet alaikäinen, et saa äänestää.</p>";

            } elseif ($ika <= 120) {

                echo "<p>Olet äänioikeutettu.</p>";

            } else {

                echo "<p>Syötit epärealistisen iän.</p>";

            }
        }
    }
}

?>

<br>
<a href="index4.html">Takaisin</a>

</body>
</html>