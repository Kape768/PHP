<?php
session_start();

if (!isset($_SESSION["start_time"]) || !isset($_SESSION["end_time"])) {
    die("Ajastimen tietoja ei löytynyt.");
}

$elapsed = $_SESSION["end_time"] - $_SESSION["start_time"];
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Ajastin - Tulos</title>
</head>
<body>

<h1>Ajastimen tulos</h1>

<p>Kulunut aika: <strong><?php echo $elapsed; ?></strong> sekuntia</p>

</body>
</html>