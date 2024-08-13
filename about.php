<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php
      $headTitle = "Qui nous sommes, nous rejoindre et contrôle de vos données personnelles";
      $headKeywords = "about us, à propos de nous, adhésion, confidentialité, ";
      $headDescription = "Depuis fin 2022, nous mettons à disposition de l'info et des ressources permettant de susciter débat(s) et réflexion(s) ainsi que des projets participatifs.";
      $headType = "profile";  // article, website, event ou profile
      $headImage = "a_000_about";
      $headUrl = "about";
      $headStyle = "about";
      $assetPath = "./assets";

      include './assets/components/head-SEO.php';
      ?>
  </head>
  <body>
    <header>
      <?php
      $pgName = "Qui nous sommes";
      $pgTitle = "L'association";
      
      include './assets/components/header.php';
      ?>
    </header>
    <main>
      <section>
        <p>Nous sommes un groupe de citoyens choletais soucieux d’améliorer notre quotidien en contribuant au développement local.</p>
        <h2>Notre mission</h2>
        <p>
          C’est mettre à disposition de l'info et des ressources permettant de susciter débat(s) et réflexion(s). Cela nous permet de proposer des projets en collaboration avec les acteurs de la
          société civile dans les domaines économiques, environnementaux et socioculturels. Ils contribueront au développement social local, privilégiant une démarche de participation citoyenne.
        </p>
        <h2>Nos valeurs</h2>
        <ul>
          <li>la solidarité locale créatrice de nouvelles relations sociales et nécessaire pour faire bouger les institutions,</li>
          <li>l’intérêt général qui guide nos actions,</li>
          <li>l’ouverture, le dialogue et l’écoute.</li>
        </ul>
        <h2>Notre philosophie</h2>
        <p>
          Nous souhaitons encourager la responsabilité citoyenne de tous qui peut s’exercer de multiples façons. Nous pouvons tous à notre niveau œuvrer pour le bien commun et pour l’intérêt général.
          Nous croyons au mouvement ascendant des citoyens qui agissent solidairement, en interpellant parfois les institutions trop souvent figées.
        </p>
        <p style="text-align: center">
          <strong>Une démocratie vivante a besoin d’une société civile puissante</strong>
        </p>
        <h2>Notre logo</h2>
        <div class="colored-box">
          <img src="./assets/img/logo.svg" alt="logo sur fond blanc" loading="lazy" />
        </div>
        <p style="text-align: center; text-wrap: balance">D'un dialogue naissent des idées qui prennent leur envol ..</p>
        <h2>Notre site internet</h2>
        <p>
          Pour <strong>échanger</strong> avec vous, il nous fallait un outil. Nous avons d'abord pensé à une <strong>lettre d'information</strong> et, un peu en <strong>complément</strong>, un
          <strong>site internet</strong> nous a semblé pertinent. Vous y trouverez :
        </p>
        <ul>
          <li><strong>Qui nous sommes</strong></li>
          <li><strong>À la une</strong> : vue d'ensemble du contenu mis à disposition</li>
          <li>Des <strong>dossiers</strong> thématiques, des ressources documentaires pour notre action,..</li>
          <li>Les <strong>évènements</strong> passés et à venir organisés par l'association, les supports et liens fournis par les intervenants,..</li>
          <li>Les <strong>projets</strong> et actions concrètes à réaliser ensemble</li>
          <li>Des <strong>interpellations</strong> : le blog des adhérents</li>
          <li>Des <strong>liens</strong> vers des ressources en ligne très pertinentes</li>
        </ul>
        <p>Il évoluera aussi au fil du temps..</p>
        <h2>Pour adhérer</h2>
        <p>
          Recruter de <strong>nouveaux adhérents</strong> est <strong>essentiel</strong> pour le développement de notre association. Cela <strong>donne du poids</strong> aux
          <strong>idées</strong> défendues ici et à nos <strong>actions</strong> collectives/ participatives.
        </p>
        <p><strong>Rejoignez-nous</strong> et faites adhérer vos proches. La cotisation annuelle est à <strong>5€</strong>.</p>
        <p>La prise de contact se fait par mail sur <a href="mailto:incitoy@laposte.net">incitoy@laposte.net</a> où lors des évènements que nous organisons.</p>
        <h2>Vos données vous appartiennent !</h2>
        <p style="text-align: center"><strong>Initiatives Citoyennes Choletaises ne cède ou vend jamais les données de ses membres.</strong></p>
        <p>Toutes les coordonnées ne sont destinées qu'à un usage interne propre au fonctionnement normal de toute association.</p>
      </section>
    </main>
    <footer>
      <div class="copyright-bar">
        ©
        <?php echo date('Y'); ?>
        <a href="_QRcode.html" title="QR Code pour partager l`url de notre site avec vos proches">Initiatives Citoyennes Choletaises</a>
      </div>
    </footer>
    <?php include './assets/components/js-cache.php'; ?>
  </body>
</html>
