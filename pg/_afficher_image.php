<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Afficher l'image</title>
  </head>
  <body>
    <a href="#" id="fermer-image">Fermer (X)</a>
    <div id="image-container">
      <?php
      // Chemin complet du répertoire des images
      $dir_images = "../assets/img/";
      
      // Vérifier si le nom du fichier est fourni
      if (isset($_GET['image'])) {
        $fichier_img = $_GET['image'];
        
        // Construire le chemin complet du fichier
        $chemin_fichier = $dir_images . $fichier_img;
        
        // Vérifier si le fichier existe
        if (file_exists($chemin_fichier)) {
          // Définir la variable CSS avec le nom du fichier
          $url_bg = 'url("' . $fichier_img . '")';
          
          // Récupérer les paramètres width et height
          $largeur_envoyee = isset($_GET['width']) ? intval($_GET['width']) : null;
          $hauteur_envoyee = isset($_GET['height']) ? intval($_GET['height']) : null;
          
          // Traiter les dimensions demandées
          $hauteur_min = ($hauteur_envoyee / $largeur_envoyee) * 300;
          $hauteur_max = ($hauteur_envoyee / $largeur_envoyee) * 1200;
          
        } else {
          echo "Le fichier image n'a pas été trouvé.";
        }
      } else {
        echo "Aucun fichier image spécifié.";
      }
      ?>
    </div>
    <style>
      body {
        max-width: max(60%, 1200px);
        margin: 15px auto;

        @media (width <= 1250px) {
          margin: 15px 4vw;
        }

        #image-container {
          width: 100%;
          height: clamp(<?= $hauteur_min ?>px, calc(100vw * <?= $hauteur_envoyee / $largeur_envoyee ?>), <?= $hauteur_max ?>px);

          background: url("../assets/img/<?php echo $fichier_img; ?>") no-repeat top / contain;
        }
      }
    </style>
    <script>
      // Ajoutez votre code JavaScript ici
      document.getElementById("fermer-image").addEventListener("click", function (e) {
        e.preventDefault();
        window.close();
      });
    </script>
  </body>
</html>
