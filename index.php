<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>À la une | Initiatives Citoyennes Choletaises</title>
  <meta name="description"
    content="Vue d’ensemble des ressources disponibles sur le site. Un message permettant de percevoir nos motivations pour ce qu’on entreprend." />
  <link rel="icon" href="assets/img/favicon.ico" />

  <meta property="og:title" content="À la une | Initiatives Citoyennes Choletaises" />
  <meta property="og:description"
    content="Vue d’ensemble des ressources disponibles sur le site. Un message permettant de percevoir nos motivations pour ce qu’on entreprend." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://inicitoy.toile-libre.org/index.php" />
  <meta property="og:image" content="https://inicitoy.toile-libre.org/assets/img/i_000_index.webp" />
  <meta property="og:site_name" content="Initiatives Citoyennes Choletaises" />
  <meta property="og:locale" content="fr_FR" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="À la une | Initiatives Citoyennes Choletaises" />
  <meta name="twitter:description"
    content="Vue d’ensemble des ressources disponibles sur le site. Un message permettant de percevoir nos motivations pour ce qu’on entreprend." />
  <meta name="twitter:image" content="https://inicitoy.toile-libre.org/assets/img/i_000_index.webp" />
  <meta name="twitter:url" content="https://inicitoy.toile-libre.org/index.php" />

  <meta name="keywords"
    content="vue d’ensemble, sommaire, message, qu’y a t’il de citoyen, initiatives, initiative, citoyen, citoyenne, citoyens, citoyennes, Cholet, choletais, choletaise, choletaises, maine et loire, pays de la loire, 49300, 49, actualité, carnaval, maire, bourdouleix, caractériel, actualite, mouchoir, textile, mode, economie, économie, service, ouest, mauges, association, environnement, municipal, elu, design, urbain, rue, urbanisme, atmosphère, élu, indeminité, indemnite, anne, hardy, sylvie, tolassy, autrement, opposition, opposant, opposante, opposition municipale, économique, economique" />
  <meta name="Author" content="Benoit Thibaud" />
  <link type="text/plain" rel="author" href="https://inicitoy.toile-libre.org/humans.txt" />
  <meta name="robots" content="all" />
  <meta http-equiv="cache-control" content="max-age=1" />
  <!-- <meta http-equiv="cache-control" content="max-age=259200" /> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="x-apple-disable-message-reformatting" />

  <link rel="stylesheet" href="./assets/styles/index.css" />
</head>

<body>
  <header>
    <?php
      $pgName = "À la une";
      $pgTitle = "Vue d'ensemble";
      
      include './assets/components/header.php';
      ?>
  </header>
  <main class="mainPattern">
    <section id="left">
      <article id="titres" class="box">
        <h2>En ce moment sur le site..</h2>
        <p>Sur <span class="btnColor"><a href="./focus.php">Dossiers</a></span></p>
        <p class="retrait">Un retour d'expériences sur la <strong>rénovation de l'éclairage public</strong></p>
        <p class="retrait">Des ressources disponibles sur le <strong>design des rues</strong></p>
        <p>Sur <span class="btnColor"><a href="./projects.php">Projets</a></span></p>
        <p class="retrait">L'action <strong>« Dessine-moi ta rue »</strong></p>
        <p>Sur <span class="btnColor"><a href="./links.php">Liens</a></span></p>
        <p class="retrait">Le site <strong>« Plus fraîche ma ville »</strong></p>
        <p class="retrait">Un guide pour la gestion <strong>des eaux de pluie et eaux usées</strong> traitées</p>
        <p class="retrait">Un article sur le <strong>pouvoir rafraichissant des arbres</strong></p>
      </article>
      <article id="message" class="box">
        <section class="courrier">
          <strong>
            <p>Qu'y a t'il de citoyen dans la conception d'une rue ?</p>
          </strong>
          <p>Content celui qui peut garer ses trois voitures devant chez lui..</p>
          <p>
            Pas contente la maman qui ne peut pas tenir un enfant dans chaque main parce que les trottoirs sont devenus
            trop étroits et c'est pire avec une poussette et les poubelles qui bloquent le
            passage..
          </p>
          <p>Citoyen = partage de la cité</p>
          <strong>
            <p>Qu'y a t'il de citoyen dans nos repas ?</p>
          </strong>
          <p>3 repas x 365 jours</p>
          <p>Nous avons plus de 1 000 occasions par an de dire dans quelle société nous voulons vivre..</p>
        </section>
      </article>
    </section>
    <section id="right">
      <article id="sommaire" class="box">
        <h3>navigation</h3>
        <p><a href="#titres">En ce moment..</a></p>
        <p><a href="#message">Message</a></p>
      </article>
      <?php include './assets/components/contact.php'; ?>
    </section>
  </main>
  <footer>
    <div class="copyright-bar">
      ©
      <?php echo date('Y'); ?>
      <a href="_QRcode.html" title="QR Code pour partager l`url de notre site avec vos proches">Initiatives Citoyennes
        Choletaises</a>
    </div>
  </footer>
  <?php include './assets/components/js-cache.php'; ?>
</body>

</html>