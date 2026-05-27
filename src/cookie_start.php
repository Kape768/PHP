<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    setcookie("start_time", time(), time() + 3600);

    header("Location: cookie_stop.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Cookie Ajastin</title>
</head>
<body>

<h1>Cookie-ajastin</h1>

<form method="post">
    <input type="submit" value="Käynnistä ajastin">
</form>

</body>
</html>