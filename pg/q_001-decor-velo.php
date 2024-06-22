<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../assets/styles/pg-quest.css" />
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
      <p>Alors que j'arrive à Marques Avenue, à La Séguinière, c'est avec une certaine colère, oui, colère que je dois
        me rendre à l'évidence. Les emplacements pour attacher nos vélos ont disparu !</p>
      <div class="float right boxed">
        <img src="../assets/img/q_001-Suppr empl vélos.webp"
          alt="la machine qui a pris la place de nos quelques emplacements vélos" loading="lazy" />
        <figcaption>Voilà ce qui remplace les seuls emplacements vélo qu'on avait !</figcaption>
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