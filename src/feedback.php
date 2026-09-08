<?php
session_start();

$viesti = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $viesti = "Kiitos palautteesta!";
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Palautelomake</h1>

<?php
if (!isset($_SESSION["kirjautunut"])) {
    echo "Kirjaudu ensin sisään.";
    echo "<br><br>";
    echo '<a href="login1.php">Kirjaudu sisään</a>';
} else {
?>

<?php
if ($viesti != "") {
    echo "<p>" . $viesti . "</p>";
}
?>

<form method="post" action="summary.php">

Palautteen aihe:<br>
<select name="aihe">
    <option>Opetus</option>
    <option>Tehtävät</option>
    <option>Työrauha</option>
    <option>Työvälineet</option>
    <option>Muu</option>
</select>

<br><br>

Palauteteksti:<br>
<textarea name="palaute"></textarea>

<br><br>

Arvosana:<br>
<select name="arvosana">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
</select>

<br><br>

<input type="checkbox" name="vastaus">
Haluan vastauksen palautteeseeni

<br><br>

Sähköpostiosoite:<br>
<input type="email" name="sahkoposti">

<br><br>

<input type="submit" value="Lähetä palaute">

</form>

<?php
}
?>

<br><br>
<a href="etusivu1.php">Takaisin etusivulle</a>

</body>
</html>
<?php
include "footer.php";
?>
<?php
include "header.php";
?>