<?php
if (!isset($_COOKIE["start_time"])) {
    die("Ajastinta ei ole käynnistetty.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    setcookie("end_time", time(), time() + 3600);

    header("Location: cookie_result.php");
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

<h1>Pysäytä ajastin</h1>

<form method="post">
    <input type="submit" value="Pysäytä ajastin">
</form>

</body>
</html>