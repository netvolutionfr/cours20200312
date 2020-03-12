<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maquette des espèces de poissons</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h2>Liste des espèces</h2>
    <div class="row mb-2">
        <?php
        /* Lecture d'un fichier CSV */

        $fichier = fopen("especes.csv", "r")
        or die("Impossible d'ouvrir le fichier CSV");

        $entetes = fgetcsv($fichier, 0, ",", "\"");
        while ($donnees = fgetcsv($fichier, 0, ",", "\"")) {

        ?>
        <div class="col-md-6"><!-- debut fiche especes -->
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Type</strong>
                    <h3 class="mb-0">Nom</h3>
                    <div class="mb-1 text-muted">Nom latin</div>
                    <p class="card-text mb-auto">Origine, façade, taille</p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="https://www.mrgoodfish.com/wp-content/uploads/2017/11/Amande-de-me.png" class="bd-placeholder-img" width="200" height="125">
                </div>
            </div>
        </div><!-- fin fiche espece -->
        <?php
        }

        fclose($fichier);
        ?>
    </div>
</div>
</body>
</html>