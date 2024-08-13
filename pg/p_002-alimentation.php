<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Repas citoyen | Nous choisissons notre société par notre alimentation";
  $headKeywords = "repas, citoyen, alimentation, saine, permaculture, saison, fruits, légumes, moins de viande, ";
  $headDescription = "Un repas « citoyen » est une occasion de s'interroger sur nos choix alimentaires et leurs conséquences. C'est aussi un lieu d'échange entre nous des solutions possibles localement.";
  $headType = "article";  // article, website, event ou profile
  $headImage = "p_002-img-pixabay";
  $headUrl = "pg/p_002-alimentation";
  $headStyle = "pg-projects";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>
</head>

<body>
  <header>
    <?php
      $pgTitle = "Projet « Repas citoyen / durable »";
      $retour = "Projets";
      include "../assets/components/header-pg.php";
      ?>
  </header>
  <main>
    <article class="box">
      <div class="small">(page en construction)</div>
      <h2>Le projet</h2>
      <p>
        Avec un groupe de six à huit personnes, nous commençons par réfléchir à l'impact de notre consommation. Cela va
        bien au-delà de notre santé, du bio, du local, etc. et de tout ce qui est
        communément dit à ce sujet.
      </p>
      <div class="float right boxed">
        <a href="_afficher_image.php?image=p_002-Menu_durable_(longue-version).svg&width=305.69&height=410"
          target="_blank" title="Cliquez sur l'image pour voir la version longue"><img
            src="../assets/img/p_002-Menu_durable.webp" alt="implication de notre alimentation (version courte)"
            loading="lazy" /></a>
        <figcaption>Voici la version courte de l'influence de notre alimentation sur la société<br />(clic sur l'image
          -> version longue)</figcaption>
      </div>
      <p>Parallèlement, nous préparons un repas que nous dégusterons ensemble à la fin de la soirée.</p>
      <p>
        Pour le moment, les demandes d'inscription (places limitées) se font par mail sur <a
          href="mailto:incitoy@laposte.net">incitoy@laposte.net</a> en attendant de vous fournir une inscription en
        ligne.
      </p>
      <h2>De quoi parle-t'on ?</h2>
      <p>Trois fois par jour et tous les jours de l'année, nous votons sans le savoir pour le type de société que nous
        souhaitons !</p>
      <p>En effet, les implications sont multiples et nous vous invitons à cliquer sur la carte mentale ci-jointe pour
        voir sa version détaillée.</p>
      <p>C'est de cela dont nous parlerons ensemble mais aussi comment on s'en sort localement pour appliquer du mieux
        qu'on peut nos bonnes résolutions !</p>
    </article>
  </main>
  <footer>
    <div class="copyright-bar">
      ©
      <?php echo date('Y'); ?>
      <a href="../_QRcode.html" title="QR Code pour partager l`url de notre site avec vos proches">Initiatives
        Citoyennes Choletaises</a>
    </div>
  </footer>
  <?php include '../assets/components/js-pgTransition.php'; ?>
</body>

</html>