<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Laajennettu lämpötilamuunnin</title>

    <style>
        body {
            font-family: Arial;
            margin: 30px;
        }

        .tulos {
            margin-top: 20px;
            padding: 15px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 10px;
            width: 300px;
        }

        .virhe {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h2>Laajennettu lämpötilamuunnin</h2>

<form method="post">
    <label>Anna lämpötila Celsius-asteina:</label><br><br>

    <input type="text" name="lampotila" required>

    <br><br>

    <label>Valitse muunnos:</label><br><br>

    <select name="yksikko">
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
        <option value="K">Kelvin</option>
    </select>

    <br><br>

    <input type="submit" value="Muunna">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lampotila = $_POST["lampotila"];
    $yksikko = $_POST["yksikko"];

    // Tarkistetaan että syöte on numero
    if (!is_numeric($lampotila)) {

        echo "<p class='virhe'>Virhe: Syötä numeroarvo!</p>";

    } else {

        $celsius = $lampotila;

        // Muunnokset
        if ($yksikko == "F") {

            $tulos = ($celsius * 9 / 5) + 32;
            $teksti = "Fahrenheit";

        } elseif ($yksikko == "K") {

            $tulos = $celsius + 273.15;
            $teksti = "Kelvin";

        } else {

            $tulos = $celsius;
            $teksti = "Celsius";
        }

        // Värit Celsius-arvon perusteella
        if ($celsius > 20) {

            $vari = "red";
            $tausta = "#ffcccc";

        } elseif ($celsius < -20) {

            $vari = "blue";
            $tausta = "#cce5ff";

        } elseif ($celsius >= 0 && $celsius <= 20) {

            $vari = "green";
            $tausta = "#ccffcc";

        } else {

            $vari = "orange";
            $tausta = "#fff3cd";
        }

        echo "<div class='tulos' style='color:$vari; background-color:$tausta;'>";

        echo round($tulos, 2) . " °" . $yksikko;
        echo "<br>";
        echo "(" . $teksti . ")";

        echo "</div>";
    }
}
?>

</body>
</html>