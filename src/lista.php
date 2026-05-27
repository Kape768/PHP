<?php
session_start();

// Luodaan autot-taulukko jos sitä ei ole olemassa
if (!isset($_SESSION['autot'])) {
    $_SESSION['autot'] = [];
}

// Poistetaan auto GET-parametrilla
if (isset($_GET['poista'])) {

    $id = $_GET['poista'];

    if (isset($_SESSION['autot'][$id])) {

        unset($_SESSION['autot'][$id]);

        // Järjestetään indeksit uudelleen
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
    <title>Autolista</title>
</head>
<body>

<h1>Tallennetut autot</h1>

<?php
if (count($_SESSION['autot']) > 0) {

    echo "<ol>";

    foreach ($_SESSION['autot'] as $index => $auto) {

        echo "<li>";

        echo htmlspecialchars($auto['merkki']) . " ";
        echo htmlspecialchars($auto['malli']) . " ";
        echo "(" . htmlspecialchars($auto['vuosi']) . ") ";

        echo "<a href='?poista=$index'>[Poista]</a>";

        echo "</li>";
    }

    echo "</ol>";

} else {

    echo "<p>Ei tallennettuja autoja.</p>";
}
?>

<br>

<a href="lisaa.php">Lisää uusi auto</a><br><br>

<a href="tyhjenna.php">Tyhjennä koko lista</a>

</body>
</html>