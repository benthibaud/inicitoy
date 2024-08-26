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
  <style>
    :root {
      --img-bg: url(../../assets/img/p_002-vegetables-2338824.webp) fixed top;
      --lisibility-bg: #07270880;
    }
  </style>
  <link rel="stylesheet" href="../assets/styles/pg-extra-imgTitle.css" />
</head>

<body>
  <header>
    <?php
      $pgTitle = "Projet « Repas citoyen »";
      $retour = "Projets";
      include "../assets/components/header-pg.php";
      ?>
  </header>
  <main>
    <article class="box">
      <div class="titleImg">
        <h2>En matière d'alimentation, faisons-nous les bons choix ?</h2>
      </div>
      <div class="box" style="background: var(--lisibility-bg); padding-bottom: 10px;">
        <h3>Nous sommes hyper-informés (médias, internet, étiquetage,..) et pourtant sommes-nous prêts ou capables de
          changer nos habitudes alimentaires au quotidien ?
        </h3>
        <div class="grid g60">
          <div>
            <p style="padding-bottom: 0;">Le repas citoyen est une opportunité pour réfléchir aux impacts de notre
              alimentation sur :
            </p>
            <ul>
              <li>Notre santé,</li>
              <li>Notre environnement</li>
              <li>Notre budget</li>
            </ul>
          </div>
          <a href="_afficher_image.php?image=p_002-Repas citoyen complet.webp&width=100%&height=100%" target="_blank"
            title="Cliquez sur l'image pour voir la version longue"><img style="width: inherit;"
              src="../assets/img/p_002-Repas_citoyen.webp" alt="implication de notre alimentation (version courte)"
              loading="lazy" height="350" /></a>
        </div>
      </div>
      <div class="titleImg" style="--img-bg: url(../../assets/img/p_002-olive-oil-1412361.webp);">
        <h2>Invitation : dimanche 29 septembre 2024</h2>
      </div>
      <div class="box" style="background: var(--lisibility-bg); padding-bottom: 10px;">
        <div style="display: flex;justify-content: center;"><img src="../assets/img/logo-txt-dark.svg"
            alt="Initiatives Citoyennes (même police que le logo)"></div>
        <h3 style="text-align: center;">organise son prochain « Repas
          Citoyen »<br><br>le
          dimanche 29 septembre à midi<br>au Puy-Saint-Bonnet
        </h3>
        <div class="displayBtn" style="justify-content: center; margin-top: 20px;">
          <a href="e_002_repas_citoyen.php" title="Page pour s'inscrire au prochain repas citoyen"><span
              class="btn _text">inscription</span></a><em>(nombre de places limitées)</em>
        </div>
      </div>
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