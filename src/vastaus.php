<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Vastaus</title>
</head>
<body>

    <h2>Lähetetyt tiedot</h2>

    <?php
        $nimi = $_POST["nimi"];
        $ika = $_POST["ika"];

        echo "<p>Nimi: " . htmlspecialchars($nimi) . "</p>";
        echo "<p>Ikä: " . htmlspecialchars($ika) . "</p>";
    ?>

</body>
</html>