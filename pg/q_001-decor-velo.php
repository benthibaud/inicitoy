<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Blog | On se fout des utilisateurs de vélos et trotinettes";
  $headKeywords = "vélo, trotinette, électrique, attacher son vélo, Séguinière, Marques Avenue, ";
  $headDescription = "Comme toujours à Cholet et son agglo, la communication passe avant tout. Tous les budgets ne servent qu'à communiquer qu'on fait beaucoup alors qu'on ne fait rien voire même qu'on régresse !!! Des emplacements déjà peu nombreux pour attacher son vélo disparaissent et on ose faire de la déco avec des vélos « pots-de-fleurs » !";
  $headType = "article";  // article, website, event ou profile
  $headImage = "q_001-SEO";
  $headUrl = "pg/q_001-decor-velo";
  $headStyle = "pg-quest";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>
</head>

<body>
  <header>
    <?php
      $pgTitle = "Vélos, on recule !";
      $retour = "Interpellations";
      include "../assets/components/header-pg.php";
      ?>
  </header>
  <main>
    <article class="box">
      <h2>Les vélos c'est pour la déco, les cyclistes, on s'en fout..</h2>
      <div class="float right boxed">
        <img src="../assets/img/q_001-Suppr empl vélos.webp"
          alt="la machine qui a pris la place de nos quelques emplacements vélos" loading="lazy" />
        <figcaption>Voilà ce qui remplace les seuls emplacements vélo qu'on avait !</figcaption>
      </div>
      <p>Alors que j'arrive à Marques Avenue, à La Séguinière, c'est avec une certaine colère, oui, colère que je dois
        me rendre à l'évidence. Les emplacements pour attacher nos vélos ont disparu !</p>
      <div class="float left" style="max-width: 20%;">
        <img src="../assets/img/q_001-panneau.webp"
          alt="panneau stationnement impossible pour les vélos et trottinettes" loading="lazy">
      </div>
      <p>Et puis je cherche.. cherche encore et encore.. Ils n'ont même pas eu la délicatesse de les mettre ailleurs !!
      </p>
      <p>On est à l'été 2023 et la dernière fois que je suis venu (période de Noël), j'avais attaché mon vélo là sans
        souci.</p>
      <p>
        En réfléchissant un peu, c'est vrai que sur toute la zone des magasins d'usine de La Séguinière, j'ai beau
        chercher, je n'ai pas souvenir d'avoir vu d'autres emplacements vélos que ceux
        qu'on avait ici.
      </p>
      <p>
        Ce qui augmente ma colère, c'est de voir qu'on a su trouver du temps pour mettre des fleurs sur des vélos de
        décoration mais pas pour replacer ailleurs l'équipement permettant d'attacher
        nos vélos!!
      </p>
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