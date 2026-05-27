<?php
session_start();

// Tyhjennetään session tiedot
session_unset();

// Tuhoaa session
session_destroy();

// Ohjataan takaisin listaan
header("Location: lista.php");
exit();
?>