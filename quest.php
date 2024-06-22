<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Interpellations | Blog et questionnements divers des adhérents</title>
  <meta name="description"
    content="Oui un plus de pistes cyclables mais on supprime les endroits où attacher nos vélos.. Alerter sur des savoirs disparus.. Blog à dispo des adhérents, nos ressentis !" />
  <link rel="icon" href="assets/img/favicon.ico" />

  <meta property="og:title" content="Interpellations | Blog et questionnements divers des adhérents" />
  <meta property="og:description"
    content="Oui un plus de pistes cyclables mais on supprime les endroits où attacher nos vélos.. Alerter sur des savoirs disparus.. Blog à dispo des adhérents, nos ressentis !" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://inicitoy.toile-libre.org/quest.php" />
  <meta property="og:image" content="https://inicitoy.toile-libre.org/assets/img/q_000_quest.webp" />
  <meta property="og:site_name" content="Initiatives Citoyennes Choletaises" />
  <meta property="og:locale" content="fr_FR" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Interpellations | Blog et questionnements divers des adhérents" />
  <meta name="twitter:description"
    content="Oui un plus de pistes cyclables mais on supprime les endroits où attacher nos vélos.. Alerter sur des savoirs disparus.. Blog à dispo des adhérents, nos ressentis !" />
  <meta name="twitter:image" content="https://inicitoy.toile-libre.org/assets/img/q_000_quest.webp" />
  <meta name="twitter:url" content="https://inicitoy.toile-libre.org/quest.php" />

  <meta name="keywords"
    content="blog, question, réaction, interpeler, initiatives, initiative, citoyen, citoyenne, citoyens, citoyennes, Cholet, choletais, choletaise, choletaises, maine et loire, pays de la loire, 49300, 49, actualité, carnaval, maire, bourdouleix, caractériel, actualite, mouchoir, textile, mode, economie, économie, service, ouest, mauges, association, environnement, municipal, elu, design, urbain, rue, urbanisme, atmosphère, élu, indeminité, indemnite, anne, hardy, sylvie, tolassy, autrement, opposition, opposant, opposante, opposition municipale, économique, economique" />
  <meta name="Author" content="Benoit Thibaud" />
  <link type="text/plain" rel="author" href="https://inicitoy.toile-libre.org/humans.txt" />
  <meta name="robots" content="all" />
  <meta http-equiv="cache-control" content="max-age=259200" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="x-apple-disable-message-reformatting" />

  <link rel="stylesheet" href="./assets/styles/quest.css" />
</head>

<body>
  <header>
    <?php
      $pgName = "Interpellations";
      $pgTitle = "Blog des adhérents";
      
      include './assets/components/header.php';
      ?>
  </header>
  <main class="mainPattern">
    <section id="left">
      <article id="vélo" class="box grid g60">
        <div>
          <h2>De qui se moque t'on ?</h2>
          <div class="blogger">Benoit - Août 2023</div>
          <p>On utilise des vélos décorés à Marques Avenue pour dire qu'on les aime, mais que penser quand, en même
            temps, on supprime les seuls endroits où on peut attacher son propre vélo !</p>
          <div class="displayBtn">
            <a href="./pg/q_001-decor-velo.php"
              title="Des vélos : oui pour décorer, non à ceux qui roulent avec.."><span
                class="btn _text">suite</span></a><em>C'est avec une certaine colère que ...</em>
          </div>
        </div>
        <img src="./assets/img/q_001-Vélo déco Marque Avenue 2.webp" alt="Des vélos pour décorer" loading="lazy" />
      </article>
      <article id="jardins" class="box">
        <h2>Une vraie agriculture durable ?</h2>
        <div class="blogger">Benoit - Juin 2023</div>
        <div class="float left">
          <a title="des « Jardins Forestiers » délibérément plantés par les populations autochtones"
            href="pg/q_002-jardins-forestiers.html"><img src="./assets/img/q_002-jardins-forestiers_250.webp"
              alt="Ancien site d'agro-forestation durable" height="120" loading="lazy" /></a>
        </div>
        <p>Aujourd'hui, je souhaite partager la <strong>traduction d'un article</strong> paru dans la <strong>revue
            Science</strong> en avril 2021.</p>
        <p>
          Quand certains trouvent des effets "positifs" à la colonisation, on ne peut que s'interroger face à la
          <strong>perte de tous les savoirs de ces populations</strong> que les colons
          qualifiaient de "sauvages"&nbsp;!
        </p>
        <p>
          Le pire est qu'on continue le capitalisme de prédation en Amazonie, en Indonésie, en Afrique,.. avec des gens
          qui ne veulent rien apprendre de la nature qu'ils envahissent et qui lui font
          la guerre à coup de déforestations, pesticides et autres pollutions..
        </p>
        <div class="displayBtn">
          <a href="pg/q_002-jardins-forestiers.html"
            title="des « Jardins Forestiers » délibérément plantés par les populations autochtones"><span
              class="btn _text">voir</span></a><em>tous ces savoirs perdus ..</em>
        </div>
      </article>
    </section>
    <section id="right">
      <article id="sommaire" class="box">
        <h3>navigation</h3>
        <p><a href="#vélo">De qui se moque t'on ?</a></p>
        <p><a href="#jardins">Une vraie agriculture durable ?</a></p>
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