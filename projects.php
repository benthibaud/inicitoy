<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Projets | Actions à réaliser ensemble</title>
    <meta name="description" content="En ce moment, nous menons une consultation sur les aménagements de la rue St Louis. Transformer une rue en parking est-il satisfaisant ?" />
    <link rel="icon" href="./assets/img/favicon.ico" />

    <meta property="og:title" content="Projets | Actions à réaliser ensemble" />
    <meta property="og:description" content="En ce moment, nous menons une consultation sur les aménagements de la rue St Louis. Transformer une rue en parking est-il satisfaisant ?" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://inicitoy.toile-libre.org/projects.html" />
    <meta property="og:image" content="https://inicitoy.toile-libre.org/assets/img/p_000_projects.webp" />
    <meta property="og:site_name" content="Initiatives Citoyennes Choletaises" />
    <meta property="og:locale" content="fr_FR" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Projets | Actions à réaliser ensemble" />
    <meta name="twitter:description" content="En ce moment, nous menons une consultation sur les aménagements de la rue St Louis. Transformer une rue en parking est-il satisfaisant ?" />
    <meta name="twitter:image" content="https://inicitoy.toile-libre.org/assets/img/p_000_projects.webp" />
    <meta name="twitter:url" content="https://inicitoy.toile-libre.org/projects.html" />

    <meta
      name="keywords"
      content="dessin, rue, dessine-moi, collectif, participatif, participative, action, ensemble, initiatives, initiative, citoyen, citoyenne, citoyens, citoyennes, Cholet, choletais, choletaise, choletaises, maine et loire, pays de la loire, 49300, 49, actualité, carnaval, maire, bourdouleix, caractériel, actualite, mouchoir, textile, mode, economie, économie, service, ouest, mauges, association, environnement, municipal, elu, design, urbain, rue, urbanisme, atmosphère, élu, indeminité, indemnite, anne, hardy, sylvie, tolassy, autrement, opposition, opposant, opposante, opposition municipale, économique, economique" />
    <meta name="Author" content="Benoit Thibaud" />
    <link type="text/plain" rel="author" href="http://mon-domaine.com/humans.txt" />
    <meta name="robots" content="all" />
    <meta name="REVISIT-AFTER" content="3 days" />
    <meta http-equiv="cache-control" content="max-age=3 days" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="x-apple-disable-message-reformatting" />

    <link rel="stylesheet" href="./assets/styles/projects.css" />
  </head>
  <body>
    <header>
      <?php include './assets/components/header.php'; ?>
      <div class="title">
        <h6>Projets</h6>
        <h1>Agir ensemble</h1>
      </div>
    </header>
    <main class="mainPattern">
      <section id="left">
        <article id="DessinRue" class="box grid g60">
          <div>
            <h2>Projet  « Dessine-moi ta rue »</h2>
            <p>
              Qu'il s'agisse d'idées pour améliorer la sécurité des piétons ou pour réduire l'accumulation de chaleur en été, ou encore d'aménagements spéciaux pour les enfants, les personnes
              handicapées, les vélos et les trottinettes électriques,... La rue parfaite n'existe probablement pas mais <strong>votre rue vous convient-elle ?</strong>
            </p>
            <div class="displayBtn">
              <a href="./pg/p_001-dessin-rue.html" title="Dessine-moi ta rue (article)"><span class="btn _text">participer</span></a
              ><em>à notre enquête (lien et modalités)</em>
            </div>
          </div>
          <img src="./assets/img/p_001-DessinRue.webp" alt="Une rue en dessin" loading="lazy" />
        </article>
        <article id="alimentation" class="box grid g30">
          <img src="./assets/img/p_002-img-pixabay.webp" alt="pixabay image illustrant la préparation d'un repas" loading="lazy" />
          <section>
            <h2>Projet  « Repas citoyen »</h2>
            <p>Autour d'un repas, nous réfléchissons ensemble à tous les impacts qu'ont nos choix alimentaires sur notre société. Cela va bien au-delà de ce qu'on pense habituellement !</p>
            <div class="displayBtn">
              <a href="./pg/p_002-alimentation.html" title="Menu citoyen / durable (article)"><span class="btn _text">voir</span></a
              ><em>comment cela s'organise</em>
            </div>
          </section>
        </article>
      </section>
      <section id="right">
        <article id="sommaire" class="box">
          <h3>navigation</h3>
          <p><a href="#DessinRue">Dessine-moi ta rue</a></p>
        </article>
        <?php include './assets/components/contact.php'; ?>
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
