<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Repas citoyen - dimanche 29 septembre 2024";
  $headKeywords = "repas, citoyen, alimentation, saine, permaculture, saison, fruits, légumes, moins de viande, ";
  $headDescription = "Nous vous invitons à notre prochain repas citoyen, le 29 septembre 2024. Ce repas préparé dans le respect de nos valeurs, sera l’occasion de nous interroger sur l’impact de notre consommation et surtout de partager un moment convivial autour de produits locaux, de qualité, de saison, bons pour notre santé et pour l’environnement.";
  $headType = "event";  // article, website, event ou profile
  $headImage = "e_002-SEO";
  $headUrl = "pg/e_002_repas_citoyen";
  $headStyle = "pg-event";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>
</head>

<body>
  <header>
    <?php
    $pgTitle = "Repas Citoyen | Inscription pour repas du 29 sept";
    $retour = "page principale Repas Citoyen";
    $retour2 = "pg/p_002-alimentation.php";
    include "../assets/components/header-pg.php";
    ?>
  </header>
  <main>
    <article class="box">
      <div class=" grid twin-img" style="justify-items: center; background: var(--white);">
        <div style="text-align: center;">
          <h2>Repas Citoyen</h2>
          <p><strong>dimanche 29 sept 2024  -  midi</strong></p>
          <p>9 rue Notre Dame - Puy-Saint-Bonnet</p>
          <p style="padding: 0 20px; text-align: left; font-style: italic;">Vous pouvez contribuer en proposant vos
            fruits et légumes du
            jardin en surplus,
            pour cela contactez-nous au
            plus tard le
            10 septembre pour l'élaboration des plats. Merci
          </p>
          <a href="mailto:inicitoy@laposte.net?subject=Repas citoyen&amp;body=Bonjour, ..." target="_blank"
            rel="noopener noreferer" title="Des surplus du jardin ? Dites-le nous pour l'élaboration des repas.."
            moz-do-not-send="true">inicitoy@laposte.net</a>
        </div>
        <a href="https://www.google.fr/maps/place/9+Rue+Notre+Dame,+49300+Cholet/@46.9971038,-0.8916179,19.12z/data=!4m6!3m5!1s0x480643600caa470b:0xc3de1fee387b3f31!8m2!3d46.9968163!4d-0.8907185!16s%2Fg%2F11c4dd_fnv"
          target="_blank" title="Agrandir la carte"><img src="../assets/img/e_002-map.webp"
            alt="copie d'écran de l'emplacement de la salle sur Google Maps">
        </a>
      </div>
    </article>
    <article class="box">
      <h2>Comment s'inscrire ?</h2>
      <ul>
        <li>activez le formulaire</li>
        <li><strong>montant par participant</strong><br><small>(qui peut être 0 € si vous préférez participer à la
            cagnotte
            sur place)</small></li>
        <li><strong>+ / - pour le nombre de participants</strong><br><small>(important pour nous pour calculer les
            achats)</small></li>
        <li>suivant: le <strong>nom des participants</strong><br>et <strong>celui qui fera le paiement</strong>
          (uniquement
          en cas de paiement en ligne)</li>
        <li>suivant: le <strong>mail de celui qui recevra la confirmation d'inscription</strong></li>
      </ul>
      <iframe id="haWidget" title="Widget HelloAsso pour l'événement Repas Citoyen" srcdoc="
        <style>
          * {
            overflow:hidden;
            margin:0;
            padding:0;
          }
          img {
            width:100%;
            height:100%;
            object-fit:contain;
          }
          a {
            display:block;
            width:100%;
            height:100%;
          }
        </style>
        <a href='https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/repas-citoyen/widget' 
        title='Accéder au widget HelloAsso'>
          <img src='../assets/img/e_002-HelloAsso-widget-factice.webp' alt='image factice pour Widget HelloAsso du Repas Citoyen' loading='lazy'>
        </a>" style="width: 100%; height: auto; min-height: 455px; border: none;" loading="lazy"></iframe>
    </article>
  </main>
  <footer>
    <div class="copyright-bar">
      ©
      <?php echo date('Y'); ?>
      <a href="../_QRcode.html" title="QR Code pour partager l`url de notre site avec vos proches">Initiatives
        Citoyennes
        Choletaises</a>
    </div>
  </footer>
  <?php include '../assets/components/js-pgTransition.php'; ?>
</body>

</html>