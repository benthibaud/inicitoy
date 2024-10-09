<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Assiette citoyenne | Nous choisissons notre société par notre alimentation";
  $headKeywords = "assiette, repas, citoyen, alimentation, saine, permaculture, saison, fruits, légumes, moins de viande, ";
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
      $pgTitle = "« Assiette citoyenne »";
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
            <p style="padding-bottom: 0;">Le repas citoyen ou « Assiette Citoyenne » est une opportunité pour réfléchir aux impacts de notre
              alimentation sur :
            </p>
            <ul>
              <li>Notre santé,</li>
              <li>Notre environnement</li>
              <li>Notre budget</li>
            </ul>
          </div>
          <a href="../assets/img/p_002-Repas citoyen complet.webp" target="_blank" title="Cliquez sur l'image pour voir la version longue"><img style="width: inherit;"
              src="../assets/img/p_002-Repas_citoyen.webp" alt="implication de notre alimentation (version courte)"
              loading="lazy" height="350" /></a>
        </div>
      </div>
      <div class="titleImg" style="--img-bg: url(../../assets/img/p_002-olive-oil-1412361.webp);">
        <h2>« Assiette Citoyenne » du 29 septembre 2024</h2>
      </div>
      <div id="sponsors" class="box" style="background: var(--lisibility-bg); padding: 10px 20px; text-align: center;">
        <p style="padding-bottom: 0;">L'« Assiette Citoyenne » est un concept développé par <a href="https://www.thierrysouccar.com/auteur/christian-remesy-5762" title="Présentation de Christian Rémésy sur le site de son éditeur" target="_blank">Christian RÉMÉSY (chercheur-paysan)</a> dans son ouvrage <a href="https://www.thierrysouccar.com/nutrition/livre/sauvons-notre-alimentation-7431" title="lien vers le livre chez son éditeur" target="_blank">« Sauvons notre alimentation | À table, citoyens ! »</a>. Il s’agit de manger pour notre santé mais aussi en préservant l’environnement.</p>
        <small>merci à nos partenaires pour leurs contributions</small>
        <section class="grid triple">
          <div>
            <a href="https://www.facebook.com/mmebocaletmrvrac/" title="mmeBocal & mrVrac (facebook)" target="_blank"><img src="../assets/img/p_002-mme_bocal.webp" alt="vignette cliquable du partenaire MmeBocal" loading="lazy"></a>
          </div>
          <div>
            <a href="https://www.facebook.com/laboulangeriebleue/" title="La Boulangerie Bleue (facebook)" target="_blank"><img src="../assets/img/p_002-Boulangerie Bleue.webp" alt="vignette cliquable du partenaire La Boulangerie Bleue" loading="lazy"></a>
          </div>
          <div>
            <a href="https://www.biocoop-cholet.fr/" title="biocoop-cholet (site web)" target="_blank"><img src="../assets/img/p_002-Biocoop.webp" alt="vignette cliquable du partenaire Biocoop" loading="lazy"></a>
          </div>
        </section>
      </div>
      <div class="box grid g42" style="background: var(--lisibility-bg); padding-bottom: 10px;">
        <img src="../assets/img/p_002-repas.webp" alt="photo de notre tablée lors du repas">
        <div>
            <p>Le 29 septembre dernier nous avons réuni quelques convives autour d’un repas selon ce concept. <strong>Côté santé</strong> nous avons fait le choix de <strong>peu de produits carnés</strong> et de peu <strong>de produits ultra transformés</strong> pour donner <strong>plus</strong> de place aux <strong>légumineuses et céréales bios</strong> ainsi qu’aux <strong>légumes du potager</strong>. Nous avons également privilégié le <strong>« fait maison »</strong>.</p>
            <p><strong>Côté environnement :</strong><br>peu de produits carnés (5 %),<br>des produits locaux de préférence (70 %).</p>
            <p><strong>Côté budget :</strong><br>des produits de saison encore disponibles dans les potagers, des produits bios de base, que nous avons cuisinés.</p>
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