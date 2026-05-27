<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luotu taulukko</title>

    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
    </style>
</head>
<body>

<h1>Generoitu taulukko</h1>

<?php

$rivit = $_POST["rivit"];
$sarakkeet = $_POST["sarakkeet"];
$taustavari = $_POST["taustavari"];
$tekstivari = $_POST["tekstivari"];

echo "<table style='background-color:$taustavari; color:$tekstivari;'>";

for ($i = 1; $i <= $rivit; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= $sarakkeet; $j++) {

        echo "<td>rivi $i solu $j</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>