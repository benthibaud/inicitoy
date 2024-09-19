<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <?php
      $headTitle = "À la une | Initiatives Citoyennes Choletaises";
      $headKeywords = "vue d’ensemble, sommaire, message, qu’y a t’il de citoyen, ";
      $headDescription = "Mettre à disposition de l'info et des ressources permettant de susciter débat(s) et réflexion(s), privilégier une démarche de participation citoyenne, œuvrer pour le bien commun et pour l’intérêt général,.. sont quelques uns de nos objectifs. Vue d’ensemble des ressources disponibles sur le site.";
      $headType = "website";  // article, website, event ou profile
      $headImage = "i_000_index";
      $headUrl = "index";
      $headStyle = "index";
      $assetPath = "./assets";

      include './assets/components/head-SEO.php';
      ?>
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
        <p class="retrait">L'action <strong>« Repas Citoyen »</strong><small> - RDV dim 29 sept</small></p>
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