<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ota yhteyttä</title>


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
                    <a class="nav-link" href="etusivu.php">Etusivu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tietoa.php">Tietoa minusta</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="yhteys.php">Ota yhteyttä</a>
                </li>

            </ul>

        </div>

    </div>
</nav>
 
<section class="container section">

    <h1 class="text-center mb-5">Ota yhteyttä</h1>

    <div class="row justify-content-center">

        <div class="col-md-8">

            <form action="https://formsubmit.co/kaapovanni@gmail.com" method="POST">

                <input type="hidden" name="_captcha" value="false">

                <div class="mb-3">
                    <label class="form-label">Nimi</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Sähköpostisi</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Viesti</label>
                    <textarea name="message" rows="5" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Lähetä
                </button>

            </form>

        </div>

    </div>

</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<footer>

    © 2026 Kaapo Vänni
</footer>