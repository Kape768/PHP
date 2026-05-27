<?php
session_start();

// Kovakoodatut tunnukset
$oikeaKayttaja = "admin";
$oikeaSalasana = "salasana123";

$virhe = "";

// Jos lomake lähetetään
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kayttaja = $_POST["kayttaja"];
    $salasana = $_POST["salasana"];

    // Tarkistus
    if ($kayttaja === $oikeaKayttaja && $salasana === $oikeaSalasana) {

        $_SESSION["kirjautunut"] = true;
        $_SESSION["kayttaja"] = $kayttaja;

        header("Location: lista.php");
        exit();

    } else {
        $virhe = "Virheellinen käyttäjätunnus tai salasana!";
    }
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Kirjautuminen</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: steelblue;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: darkblue;
        }

        .virhe {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-box">

    <h1>Kirjaudu sisään</h1>

    <?php
    if ($virhe != "") {
        echo "<p class='virhe'>$virhe</p>";
    }
    ?>

    <form method="POST">

        <label>Käyttäjätunnus</label>
        <input type="text" name="kayttaja" required>

        <label>Salasana</label>
        <input type="password" name="salasana" required>

        <button type="submit">Kirjaudu</button>

    </form>

</div>

</body>
</html>