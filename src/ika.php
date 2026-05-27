<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Ikälomake</title>
</head>
<body>

    <h2>Anna tietosi</h2>

    <form action="vastaus.php" method="POST">
        <label>Nimi:</label><br>
        <input type="text" name="nimi" required><br><br>

        <label>Ikä:</label><br>
        <input type="number" name="ika" required><br><br>

        <input type="submit" value="Lähetä">
    </form>

</body>
</html>