<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <?php
    $headTitle = "Projets | Actions à réaliser ensemble";
    $headKeywords = "dessin, rue, dessine-moi, collectif, participatif, participative, action, ensemble, ";
    $headDescription = "Quels sont vos ressentis sur les réaménagements de rues (St Louis, Mermoz,..) ? Manger mieux oui mais comment ? Plusieurs projets sont en cours pour agir ensemble..";
    $headType = "website";  // article, website, event ou profile
    $headImage = "p_000_projects";
    $headUrl = "projects";
    $headStyle = "projects";
    $assetPath = "./assets";

    include './assets/components/head-SEO.php';
    ?>
  </head>

<body>
  <header>
    <?php
      $pgName = "Projets";
      $pgTitle = "Agir ensemble";
      
      include './assets/components/header.php';
      ?>
  </header>
  <main class="mainPattern">
    <section id="left">
      <article id="alimentation" class="box grid g30">
        <img src="./assets/img/p_002-img-pixabay.webp" alt="pixabay image illustrant la préparation d'un repas"
          loading="lazy" />
        <section>
          <h2>Action  « Assiette citoyenne »</h2>
          <p>Autour d'un repas, nous réfléchissons ensemble à tous les impacts qu'ont nos choix alimentaires sur notre
            société. Cela va bien au-delà de ce qu'on pense habituellement !</p>
          <div class="displayBtn">
            <a href="./pg/p_002-alimentation.php" title="Lien vers la page explicative"><span
                class="btn _text">voir</span></a><em>ce qu'a été notre action en sept 24</em>
          </div>
        </section>
      </article>
      <article id="DessinRue" class="box grid g60">
        <div>
          <h2>Projet  « Dessine-moi ta rue »</h2>
          <p>
            Qu'il s'agisse d'idées pour améliorer la sécurité des piétons ou pour réduire l'accumulation de chaleur en
            été, ou encore d'aménagements spéciaux pour les enfants, les personnes
            handicapées, les vélos et les trottinettes électriques,... La rue parfaite n'existe probablement pas mais
            <strong>votre rue vous convient-elle ?</strong>
          </p>
          <div class="displayBtn">
            <a href="./pg/p_001-dessin-rue.php" title="Dessine-moi ta rue (article)"><span
                class="btn _text">participer</span></a><em>à notre enquête (lien et modalités)</em>
          </div>
        </div>
        <img src="./assets/img/p_001-DessinRue.webp" alt="Une rue en dessin" loading="lazy" />
      </article>
    </section>
    <section id="right">
      <article id="sommaire" class="box">
        <h3>navigation</h3>
        <p><a href="#alimentation">Repas citoyen</a></p>
        <p><a href="#DessinRue">Dessine-moi ta rue</a></p>
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