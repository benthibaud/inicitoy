<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Engagement des jeunes - 9 mai 2023";
  $headKeywords = "engagement, militant, jeunes, élection, vote, scrutin, urnes, société, réseau social, réseaux sociaux, ";
  $headDescription = "Deux sociologues, G. Houdeville et J. Launay, présenteront notamment différentes mesures dédiées à la jeunesse et comment attirer les « décrocheurs scolaires » vers ces dispositifs.";
  $headType = "event";  // article, website, event ou profile
  $headImage = "e_001-SEO";
  $headUrl = "pg/e_001_engagt";
  $headStyle = "pg-event";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>
</head>
  
<body>
  <header>
    <?php
    $pgTitle = "Engagement des jeunes";
    $retour = "Évènements";
    include "../assets/components/header-pg.php";
    ?>
  </header>
  <main>
    <article class="box">
      <h2>Venez argumenter sur vos propres engagements..</h2>
      <div class="grid g30">
        <div>
          <img src="../assets/img/e_001-affiche.webp" alt="affiche de l'évènement" loading="lazy" />
        </div>
        <div>
          <p>
            Si vous êtes étudiant ou lycéen, vous pouvez participer :
          <ul>
            <li><strong><a
                  href="https://docs.google.com/forms/d/e/1FAIpQLSf3sYBonj-L5kA9x9j1nNP8bqHpoqh5XWzVKKrQiAEqx0uD6w/viewform?vc=0&c=0&w=1&flr=0"
                  title="Rapide questionnaire anonyme sur vos motifs d'engagement" target="_blank">Enquête
                  lycéens</a></strong></li>
            <li><strong><a
                  href="https://docs.google.com/forms/d/e/1FAIpQLSd5UzRCpsxdOgBBNa-_nx4unrvsF5C4GwMieXb08EDVdvhhpw/viewform?vc=0&c=0&w=1&flr=0"
                  title="Rapide questionnaire anonyme sur vos motifs d'engagement" target="_blank">Enquête
                  étudiants</strong></a></li>
          </ul>
          </p>
          <p>
            On peut vous trouver sur certaines contestations (retraites, service national universel,..), du bénévolat
            associatif, du service civique ou encore du volontariat en entreprise. Vous êtes bien plus engagés que ce
            que
            colportent sur vous des clichés bien ancrés ! Par contre, vous participez peu aux scrutins électoraux
            locaux.
          </p>
          <p>
            Pourquoi vous engagez-vous ? Sous quelles formes ? Quels projets, démarches,.. soutenez-vous ? Quels
            accompagnements pourraient être judicieux ?
          </p>
          <p>
            Nous vous proposons de venir témoigner, échanger, contredire éventuellement,.. l'état des lieux établi par
            deux sociologues, G. Houdeville et J. Launay.
          </p>
          <p>
            Ça se passe <strong>mardi 9 mai 2023 à 18h30</strong> à la salle de la Bruyère.
          </p>
          <br>
          <p>
            Si vous ne pouvez pas venir, répondez à l'une des enquêtes proposées plus haut.. Cela nous aide à mieux vous
            comprendre.
          </p>
        </div>
      </div>
      <div class="grid g60" style="justify-items: center;margin-top: 20px;">
        <a href="https://maps.app.goo.gl/vfp4ys9rTkRCiwf46" target="_blank" title="Agrandir la carte"><img
            src="../assets/img/e_001-map.webp" alt="copie d'écran de l'emplacement de la salle sur Google Maps"></a>
        <div>
          <h4>Partagez cette page</h4>
          <img src="../assets/img/e_001-QR Code - Engagt.png" alt="QR Code de partage de cette page"
            style="max-width: 180px" loading="lazy" />
        </div>
      </div>

    </article>
  </main>
  <footer>
    <div class="copyright-bar">
      ©
      <?php echo date('Y'); ?><a href="../_QRcode.html"
        title="QR Code pour partager l`url de notre site avec vos proches">Initiatives
        Citoyennes Choletaises</a>
    </div>
  </footer>
  <?php include '../assets/components/js-pgTransition.php'; ?>
</body>

</html>