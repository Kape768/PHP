<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Palindromin tarkistus</title>
</head>
<body>

<h1>Palindromin tarkistus</h1>

<form method="POST">
    <label>Anna merkkijono:</label><br><br>

    <input type="text" name="teksti" required>
    <button type="submit">Tarkista</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $teksti = $_POST["teksti"];

    // Muutetaan pieniksi kirjaimiksi
    $teksti = strtolower($teksti);

    // Poistetaan kaikki muut paitsi kirjaimet
    $teksti = preg_replace("/[^a-zåäö]/u", "", $teksti);

    // Käännetään merkkijono
    $kaannetty = strrev($teksti);

    // Tarkistus
    if ($teksti == $kaannetty) {
        echo "<p>Merkkijono on palindromi.</p>";
    } else {
        echo "<p>Merkkijono ei ole palindromi.</p>";
    }
}

?>

</body>
</html>