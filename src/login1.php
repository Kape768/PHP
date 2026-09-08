<?php
session_start();

$nimi = "";
$ryhma = "";
$virhe = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nimi = $_POST["nimi"];
    $ryhma = $_POST["ryhma"];
    $salasana = $_POST["salasana"];

    if ($nimi != "" && $ryhma != "" && $salasana == "php123") {

        $_SESSION["nimi"] = $nimi;
        $_SESSION["ryhma"] = $ryhma;
        $_SESSION["kirjautunut"] = true;

        header("Location: etusivu1.php");
        exit;

    } else {
        $virhe = "Virheelliset tiedot";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Kirjaudu sisään</h1>

<?php
echo $virhe;
?>

<form method="post">



Nimi:<br>
<input type="text" name="nimi" value="<?php echo $nimi; ?>">
<br><br>


Opiskelijaryhmä:<br>
<input type="text" name="ryhma" value="<?php echo $ryhma; ?>">
<br><br>


Salasana:<br>
<input type="password" name="salasana">
<br><br>


<input type="submit" value="Kirjaudu">

</form>

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