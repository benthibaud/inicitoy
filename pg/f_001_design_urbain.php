<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="../assets/img/favicon.ico" />
  <title>Design urbain</title>
  <link rel="stylesheet" href="../assets/styles/pg-focus.css" />
</head>

<body>
  <header>
    <?php
          $pgTitle = "Design Urbain";
          $retour = "Dossiers";
          include "../assets/components/header-pg.php";
          ?>
  </header>
  <main>
    <div class="grid box">
      <img style="display: block;" src="../assets/img/f_001-street design illustration.webp"
        alt="exemple de design urbain" loading="lazy" />
    </div>
    <article class="box" id="guiderues">
      <h2>Guide méthodologique pour la transformation des rues</h2>
      <p>
        Rédigé par un collectif d'experts et de citoyens dont l'<strong>ADEME</strong>, il nous invitent à
        <strong>repenser nos rues</strong> en <strong>libérant</strong> et transformant les
        <strong>sols</strong>, opérant une <strong>transition</strong> vers les <strong>mobilités décarbonées</strong>
        et repensant la <strong>vocation et les usages de la rue</strong> elle-même
        en <strong>associant</strong> pleinement les <strong>citoyens</strong>.
      </p>
      <p><strong>Expérimentée</strong> d’abord sur quelques rues puis <strong>étendue progressivement</strong> à
        d’autres quartiers, elle cherchera notamment à :</p>
      <ul>
        <li><strong>mieux gérer les eaux pluviales et les îlots de chaleur</strong>, grâce à des matériaux perméables,
          de la végétation et de l'ombrage,
        </li>
        <li>pouvoir <strong>s'adapter avec le temps</strong>, via des aménagements modulables et réversibles plutôt
          que définitifs,
        </li>
        <li><strong>anticiper les besoins futurs</strong> en pensant les réseaux de manière robuste (fortes pluies :
          canalisations adaptées, câbles résistants,..).
        </li>
      </ul>
      <p>
        Bien que technique, le guide est <strong>très illustré</strong>, avec photos, schémas et pictogrammes qui
        <strong>facilitent la compréhension</strong>. Il intègre également des
        <strong>études et exemples du monde entier</strong>.
      </p>
      <p>
        <a title="Leur démarche, une synthèse d'une grande consultation, une invitation à venir les rejoindre.."
          href="https://www.ruecommune.com/" target="_blank"><strong>https://www.ruecommune.com/</strong></a>
        <br />
        <a title="Page présentant leur démarche autour du Guide" href="https://www.ruecommune.com/guide"
          target="_blank">page présentant le guide</a>
      </p>
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