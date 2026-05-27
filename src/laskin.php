<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Laskin</title>
</head>
<body>

    <h2>Tulokset</h2>

    <?php

        $luku1 = $_POST["luku1"];
        $luku2 = $_POST["luku2"];

        $summa = $luku1 + $luku2;
        $keskiarvo = $summa / 2;

        echo "<p>Ensimmäinen luku: $luku1</p>";
        echo "<p>Toinen luku: $luku2</p>";
        echo "<p>Summa: $summa</p>";
        echo "<p>Keskiarvo: $keskiarvo</p>";

    ?>

</body>
</html>