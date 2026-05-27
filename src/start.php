<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["start_time"] = time();

    header("Location: stop.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Ajastin - Aloitus</title>
</head>
<body>

<h1>Ajastimen aloitus</h1>

<form method="post">
    <input type="submit" value="Käynnistä ajastin">
</form>

</body>
</html>