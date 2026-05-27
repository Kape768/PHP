<?php
session_start();

// Tarkistetaan kirjautuminen
if (!isset($_SESSION["kirjautunut"])) {
    header("Location: login.php");
    exit();
}

// Luodaan autot-taulukko
if (!isset($_SESSION['autot'])) {
    $_SESSION['autot'] = [];
}

// Tallennus
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $merkki = trim($_POST["merkki"]);
    $malli = trim($_POST["malli"]);
    $vuosi = trim($_POST["vuosi"]);

    $_SESSION['autot'][] = [
        "merkki" => $merkki,
        "malli" => $malli,
        "vuosi" => $vuosi
    ];

    header("Location: lista.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Lisää auto</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            padding: 40px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 400px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
        }

        button {
            padding: 10px;
            width: 100%;
            background-color: seagreen;
            color: white;
            border: none;
            border-radius: 5px;
        }

        a {
            text-decoration: none;
            color: steelblue;
        }
    </style>
</head>
<body>

<div class="container">

<h1>Lisää uusi auto</h1>

<form method="POST">

    <label>Merkki</label>
    <input type="text" name="merkki" required>

    <label>Malli</label>
    <input type="text" name="malli" required>

    <label>Vuosimalli</label>
    <input type="number" name="vuosi" required>

    <button type="submit">Tallenna auto</button>

</form>

<br>

<a href="lista.php">← Takaisin listaan</a>

</div>

</body>
</html>