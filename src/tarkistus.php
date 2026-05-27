<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tarkistus</title>
</head>
<body>

<h1>Tietojen tarkistus</h1>

<?php

$virheet = [];


$etunimi = trim($_POST["etunimi"]);
$sukunimi = trim($_POST["sukunimi"]);
$sukupuoli = $_POST["sukupuoli"] ?? "";
$hetu = trim($_POST["hetu"]);
$email = trim($_POST["email"]);
$osoite = trim($_POST["osoite"]);
$postinumero = trim($_POST["postinumero"]);
$postitoimipaikka = trim($_POST["postitoimipaikka"]);



if (empty($etunimi)) {
    $virheet[] = "Etunimi puuttuu.";
}

if (empty($sukunimi)) {
    $virheet[] = "Sukunimi puuttuu.";
}


$sallitut = ["Mies", "Nainen", "Muu"];

if (!in_array($sukupuoli, $sallitut)) {
    $virheet[] = "Virheellinen sukupuoli.";
}



$hetuRegex = "/^[0-9]{6}[+-A][0-9]{3}[0-9A-Y]$/";

if (!preg_match($hetuRegex, $hetu)) {
    $virheet[] = "Virheellinen henkilötunnus.";
}



if (substr_count($email, "@") != 1 || substr_count($email, ".") != 1) {
    $virheet[] = "Virheellinen sähköposti.";
}


if (empty($osoite)) {
    $virheet[] = "Katuosoite puuttuu.";
}



if (!preg_match("/^[0-9]{5}$/", $postinumero)) {
    $virheet[] = "Virheellinen postinumero.";
}



if (empty($postitoimipaikka)) {
    $virheet[] = "Postitoimipaikka puuttuu.";
}



if (count($virheet) > 0) {

    echo "<h2>Virheitä löytyi:</h2>";
    echo "<ul>";

    foreach ($virheet as $virhe) {
        echo "<li>$virhe</li>";
    }

    echo "</ul>";

} else {

    echo "<h2>Kaikki tiedot ovat oikein!</h2>";

    echo "<p><strong>Etunimi:</strong> $etunimi</p>";
    echo "<p><strong>Sukunimi:</strong> $sukunimi</p>";
    echo "<p><strong>Sukupuoli:</strong> $sukupuoli</p>";
    echo "<p><strong>Henkilötunnus:</strong> $hetu</p>";
    echo "<p><strong>Sähköposti:</strong> $email</p>";
    echo "<p><strong>Katuosoite:</strong> $osoite</p>";
    echo "<p><strong>Postinumero:</strong> $postinumero</p>";
    echo "<p><strong>Postitoimipaikka:</strong> $postitoimipaikka</p>";
}

?>

</body>
</html>