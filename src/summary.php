<?php
session_start();

$nimi = $_SESSION["nimi"];
$ryhma = $_SESSION["ryhma"];

$aihe = $_POST["aihe"];
$palaute = $_POST["palaute"];
$arvosana = $_POST["arvosana"];


$aihe = $_POST["aihe"];
setcookie("viimeisin_aihe", $aihe, time() + 3600);
$palaute = $_POST["palaute"];
$arvosana = $_POST["arvosana"];

$_SESSION["palaute"] = $palaute;
$_SESSION["nimi"] = $nimi;
$_SESSION["ryhma"] = $ryhma;
$_SESSION["kirjautunut"] = true;
$_SESSION["palaute"] = $palaute;

if (isset($_POST["vastaus"])) {
    $vastaus = "Kyllä";
} else {
    $vastaus = "Ei";
}

$sahkoposti = $_POST["sahkoposti"];


$aika = date("d.m.Y H:i");
?>

<!DOCTYPE html>
<html>
<body>


<h1>Kiitos palautteesta!</h1>

<p>Nimi: <?php echo $nimi; ?></p>

<p>Opiskelijaryhmä: <?php echo $ryhma; ?></p>

<p>Palautteen aihe: <?php echo $aihe; ?></p>

<p>Palauteteksti: <?php echo $palaute; ?></p>

<p>Arvosana: <?php echo $arvosana; ?></p>

<p>Vastauspyyntö: <?php echo $vastaus; ?></p>

<?php
if ($sahkoposti != "") {
    echo "<p>Sähköpostiosoite: " . $sahkoposti . "</p>";
}
?>


<p>Lähetysaika: <?php echo $aika; ?></p>

<br>


<a href="etusivu1.php">Takaisin etusivulle</a>

</body>
</html>
<?php
// footer jokaiseen sivuun
include "footer.php";
?>
<?php
// Header jokaiseen sivuun
include "header.php";
?>