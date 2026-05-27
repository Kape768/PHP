<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Tulos</title>
</head>
<body>

<h1>Lempiruoka-valinta</h1>

<?php

if (isset($_POST["ruoka"]) && $_POST["ruoka"] != "") {

    $ruoka = $_POST["ruoka"];

    switch ($ruoka) {

        case "pizza":
            echo "Valitsit pizzan – herkullinen valinta!";
            break;

        case "sushi":
            echo "Valitsit sushin – tyylikäs valinta!";
            break;

        case "hampurilainen":
            echo "Valitsit hampurilaisen – maukas valinta!";
            break;

        case "pasta":
            echo "Valitsit pastan – italialaista herkkua!";
            break;

        case "salaatti":
            echo "Valitsit salaatin – terveellinen valinta!";
            break;

        default:
            echo "Virhe: tuntematon valinta.";
    }

} else {
    echo "Et valinnut ruokaa.";
}

?>

</body>
</html>