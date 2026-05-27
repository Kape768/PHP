<!DOCTYPE html>
<html lang="fi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etusivu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="etusivu.php">
                Portfolio
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="etusivu.php">
                            Etusivu
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="tietoa.php">
                            Tietoa minusta
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="yhteys.php">
                            Ota yhteyttä
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <section class="container py-5">

        <div class="row align-items-center gy-5">

            <div class="col-lg-5 text-center text-lg-start">

                <h1>Hei, olen Kaapo Vänni</h1>

                <p class="lead mt-4">
                    Opiskelen tieto- ja viestintätekniikkaa Savon ammattiopistossa.
                    Olen kiinnostunut ohjelmoinnista.
                </p>

                <a href="yhteys.php" class="btn btn-light btn-lg mt-3">
                    Ota yhteyttä
                </a>

            </div>

            <div class="col-lg-7">

                <h2 class="text-center mb-2">
                    Tervetuloa sivuilleni
                </h2>

                <p class="text-center mb-4">
                    Täältä löydät tietoa osaamisestani ja harrastuksistani.
                </p>

                <div class="row g-4">

                    <div class="col-md-4">
                        <h4>💡 Oppimiskyky</h4>
                        <p>
                            Opin nopeasti uusia asioita ja ymmärrän ne hyvin.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h4>💻 Käytännön taidot</h4>
                        <p>
                            Osaan perusteet mitä olemme ensimmäisellä vuodella opiskelleet.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h4>🤝 Tiimityö</h4>
                        <p>
                            Toimin hyvin ryhmässä ja teen annetut tehtävät tehokkaasti.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <footer>
        © 2026 Kaapo Vänni
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>