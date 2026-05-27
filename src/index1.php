<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Polttoaineen kulutuslaskuri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Polttoaineen kulutuslaskuri</h1>

<form action="laskenta.php" method="post">

    <label>Ajettu matka (km)</label>
    <input type="number" step="0.1" name="matka" required>

    <label>Keskikulutus (l / 100 km)</label>
    <input type="number" step="0.1" name="kulutus" required>

    <label>Polttoaineen hinta (€ / l)</label>
    <input type="number" step="0.01" name="hinta" required>

    <label>Polttoainetyyppi</label>
    <select name="polttoaine">
        <option value="Bensiini">Bensiini</option>
        <option value="Diesel">Diesel</option>
    </select>

    <button type="submit">Laske</button>

</form>

</body>
</html>