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

// Poisto
if (isset($_GET['poista'])) {

    $id = $_GET['poista'];

    if (isset($_SESSION['autot'][$id])) {

        unset($_SESSION['autot'][$id]);

        $_SESSION['autot'] = array_values($_SESSION['autot']);
    }

    header("Location: lista.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Autorekisteri</title>

    <style>
        body {
            font-family: Arial;
            background-color: #eef2f3;
            padding: 40px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th {
            background-color: steelblue;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: steelblue;
            font-weight: bold;
        }

        .top-links {
            margin-bottom: 20px;
        }

        .poista {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">

<h1>🚗 Autorekisteri</h1>

<p>Tervetuloa, <?php echo htmlspecialchars($_SESSION["kayttaja"]); ?>!</p>

<div class="top-links">
    <a href="lisaa.php">➕ Lisää uusi auto</a> |
    <a href="logout.php">🚪 Kirjaudu ulos</a>
</div>

<?php
if (count($_SESSION['autot']) > 0) {

    echo "<table>";
    echo "<tr>
            <th>#</th>
            <th>Merkki</th>
            <th>Malli</th>
            <th>Vuosimalli</th>
            <th>Toiminto</th>
          </tr>";

    foreach ($_SESSION['autot'] as $index => $auto) {

        echo "<tr>";

        echo "<td>" . ($index + 1) . "</td>";

        echo "<td>" . htmlspecialchars($auto['merkki']) . "</td>";

        echo "<td>" . htmlspecialchars($auto['malli']) . "</td>";

        echo "<td>" . htmlspecialchars($auto['vuosi']) . "</td>";

        echo "<td>
                <a class='poista' href='?poista=$index'>
                Poista
                </a>
              </td>";

        echo "</tr>";
    }

    echo "</table>";

} else {

    echo "<p>Ei tallennettuja autoja.</p>";
}
?>

</div>

</body>
</html>