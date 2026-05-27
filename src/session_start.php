<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["start_time"] = time();

    header("Location: session_stop.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Session Ajastin</title>
</head>
<body>

<h1>Session-ajastin</h1>

<form method="post">
    <input type="submit" value="Käynnistä ajastin">
</form>

</body>
</html>