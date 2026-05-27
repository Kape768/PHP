<?php
session_start();

// Luodaan autot-taulukko jos sitä ei ole vielä olemassa
if (!isset($_SESSION['autot'])) {
    $_SESSION['autot'] = [];
}

// Lomakkeen käsittely
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $merkki = trim($_POST["merkki"]);
    $malli = trim($_POST["malli"]);
    $vuosi = trim($_POST["vuosi"]);

    // Tallennetaan auto sessioon
    $_SESSION['autot'][] = [
        "merkki" => $merkki,
        "malli" => $malli,
        "vuosi" => $vuosi
    ];

    // Uudelleenohjaus
    header("Location: lista.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Lisää auto</title>
</head>
<body>

<h1>Lisää uusi auto</h1>

<form method="POST">

    <label>Merkki:</label><br>
    <input type="text" name="merkki" required><br><br>

    <label>Malli:</label><br>
    <input type="text" name="malli" required><br><br>

    <label>Vuosimalli:</label><br>
    <input type="number" name="vuosi" required><br><br>

    <button type="submit">Tallenna auto</button>

</form>

<br>

<a href="lista.php">Näytä autot</a>

</body>
</html>