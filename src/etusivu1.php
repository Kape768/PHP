<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Palautesovellus</title>
</head>
<body>

<h1>Palautesovellus</h1>

<p>Tällä sovelluksella voit antaa palautetta.</p>

<?php
if (isset($_SESSION["nimi"])) {
    echo "Olet kirjautunut käyttäjänä " . $_SESSION["nimi"] . ".";
} else {
    echo "Et ole kirjautunut sisään.";
}
?>

<br><br>

<a href="login1.php">Kirjaudu sisään</a>
<br>
<a href="feedback.php">Palautelomake</a>
<br>
<a href="logout.php">Kirjaudu ulos</a>

</body>
</html>