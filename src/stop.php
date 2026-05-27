<?php
session_start();

if (!isset($_SESSION["start_time"])) {
    die("Ajastinta ei ole käynnistetty.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["end_time"] = time();

    header("Location: result.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Ajastin - Lopetus</title>
</head>
<body>

<h1>Ajastimen lopetus</h1>

<form method="post">
    <input type="submit" value="Pysäytä ajastin">
</form>

</body>
</html>