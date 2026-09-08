<?php
session_start();

session_unset();
session_destroy();

header("Location: etusivu1.php");
exit;

?>
<?php
// footer jokaiseen sivuun
include "footer.php";
?>
<?php
// Header jokaiseen sivuun
include "header.php";
?>
