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
            $nom = $donnees[1];
            $nomlatin = $donnees[2];
            $taille = $donnees[3];
            $origine = $donnees[4];
            $type = $donnees[5];
            $facade = $donnees[6];
            $image = $donnees[7];
        ?>
        <div class="col-md-6"><!-- debut fiche especes -->
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?php echo $type; ?></strong>
                    <h3 class="mb-0"><?php echo $nom; ?></h3>
                    <div class="mb-1 text-muted"><?php echo $nomlatin; ?></div>
                    <p class="card-text mb-auto">Origine : <?php echo $origine; ?><br>
                        Façade : <?php echo $facade; ?><br>
                        Taille : <?php echo $taille; ?></p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="<?php echo $image; ?>" class="bd-placeholder-img" width="200" height="125">
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