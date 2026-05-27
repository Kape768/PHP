<?php
if (!isset($_COOKIE["start_time"]) || !isset($_COOKIE["end_time"])) {
    die("Ajastimen tietoja ei löytynyt.");
}

$elapsed = $_COOKIE["end_time"] - $_COOKIE["start_time"];

if (isset($_POST["delete"])) {

    setcookie("start_time", "", time() - 3600);
    setcookie("end_time", "", time() - 3600);

    header("Location: cookie_start.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Cookie Tulos</title>
</head>
<body>

<h1>Ajastimen tulos</h1>

<p>Kulunut aika: <?php echo $elapsed; ?> sekuntia</p>

<form method="post">
    <input type="submit" name="delete" value="Poista Cookiet">
</form>

</body>
</html>