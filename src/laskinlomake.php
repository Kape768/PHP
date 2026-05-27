<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Laskimen tulos</title>
</head>
<body>

<?php

function laske($luku1, $luku2, $operaatio) {

    switch ($operaatio) {

        case "+":
            return $luku1 + $luku2;

        case "-":
            return $luku1 - $luku2;

        case "*":
            return $luku1 * $luku2;

        case "/":

            if ($luku2 == 0) {
                return "Virhe: Nollalla jakaminen ei ole sallittua.";
            }

            return $luku1 / $luku2;

        default:
            return "Virhe: Tuntematon laskutoimitus.";
    }
}

$luku1 = $_POST["luku1"];
$luku2 = $_POST["luku2"];
$operaatio = $_POST["operaatio"];

$tulos = laske($luku1, $luku2, $operaatio);

echo "<h1>Tulos</h1>";
echo "<p>" . $tulos . "</p>";

?>

<br>
<a href="laskinlomake.html">Takaisin laskimeen</a>

</body>
</html>