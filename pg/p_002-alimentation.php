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
    .box {
      .subbox {
        background: var(--lisibility-bg);

        p {
          &.fin { /* dernier paragraphe d'une box */
            padding-bottom: 10px;
            margin: 0;
          }
          &.item {
            line-height: 1.4;
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 1px;
            padding-bottom: unset;
            padding-left: 1em;
            small {
              text-transform: uppercase;
              font-size: 0.6em;
              font-weight: normal;
            }
          }
        }
        h4 {
          padding-left: 1em;
          margin-top: 2.1em;
        }
      }
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
      <div class="box subbox"> <!-- la classe subbox est définie uniquement dans le head de cette page -->
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
      <div id="sponsors" class="box subbox" style="text-align: center;">
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
      <div class="box subbox grid g42">
        <img src="../assets/img/p_002-repas.webp" alt="photo de notre tablée lors du repas">
        <div>
            <p>Le 29 septembre dernier nous avons réuni quelques convives autour d’un repas selon ce concept.</p>
            <p><strong>Côté santé :</strong><br>peu de produits carnés<br>peu de produits ultra transformés<br><strong>plus de</strong> légumineuses et de céréales bio<br><strong>plus de</strong> légumes du potager<br>et le « fait maison » est privilégié</p>
            <p><strong>Côté environnement :</strong><br>peu de produits carnés (5 %),<br>des produits locaux de préférence (70 %).</p>
            <p class="fin"><strong>Côté budget :</strong><br>des produits de saison encore disponibles dans les potagers, des produits bios de base, que nous avons cuisinés.</p>
        </div>
      </div>
      <div class="box subbox">
        <h3>Le Quiz</h3>
        <p class="fin">Au cours du repas, les convives ont eu à répondre à ce <strong><a href="../assets/img/p_002-quizz.pdf" title="le fichier pdf du quizz">Quizz</a></strong>.<br>Et vous, auriez-vous su y répondre ? Les réponses aux questions posées (via votre moteur de recherche préféré) sont édifiantes, non ?</p>
      </div>
      <div class="box subbox">
        <section class="grid g42" style="align-items: start;">
          <div>
            <h3>Apéro</h3>
            <p class="item">cake<br><small>aux pois chiches, tomates séchées et Feta</small></p>
            <p class="item">pain<br><small>aux lentilles</small></p>
            <p class="item">tartinades<br><small>betteraves et butternuts</small></p>
            <p class="item">mayonnaise<br><small>à base d'haricots blancs</small></p>
            <p class="item">bâtonnets de carottes<br><small>avec sauce au fromage de chèvre</small></p>
            <p class="item">tomates cerises du jardin</p>
            <h4>accompagné d'</h4>
            <p class="item">apéritif maison<br><small>vin blanc ou rosé au basilic du jardin</small></p>
          </div>
          <div>
            <h3>Entrées</h3>
            <p class="item">potage<br><small>courgettes du jardin, lait de coco et curry</small></p>
            <p class="item">potage<br><small>tomates</small></p>
            <p class="item">terrine végétale</p>
            <p class="item">terrine de chevreuil</p>
            <h3>Plats</h3>
            <p class="item">poivrons<br><small>farcis au sarrasin</small></p>
            <p class="item">butternut<br><small>rôti</small></p>
            <p class="item">parmentier<br><small>purée de pommes de terre et de butternut, viande</small></p>
            <p class="item">salade</p>
            <h3>Fromages</h3>
            <p class="item">tomme (vache)<br><small>Saint-Christophe-du-Bois</small></p>
            <p class="item">bûche (chèvre)<br><small>Le May-sur-Èvre</small></p>
            <p class="item">pavé (brebis)<br><small>Le May-sur-Èvre</small></p>
            <h3>Desserts</h3>
            <p class="item">portion de crumble<br><small>aux pêches de vigne</small></p>
            <p class="item">pommes cuites<br><small>du jardin et leur compote de figues</small></p>
            <p class="item">carré de gâteau au chocolat<br><small>à la courgette</small></p>
            <h3><br><br>servis avec</h3>
            <p class="item">vin rouge<br><small>Saumur-Champigny</small></p>
          </div>
        </section>
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