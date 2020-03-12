<?php include("entete.php"); ?>
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
<?php include("piedpage.php"); ?>