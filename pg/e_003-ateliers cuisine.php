<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Ateliers cuisine | Inviter à changer nos habitudes..";
  $headKeywords = "atelier, cuisine, légumineuses, tartes, tourtes, céréales, Gilles, DAVEAU, assiette, repas, citoyen, alimentation, saine, permaculture, saison, fruits, légumes, moins de viande, ";
  $headDescription = "Des recettes simples pour découvrir qu'il est possible de changer les habitudes que nous inculquent la société, la pub, nos entourages, etc.";
  $headType = "event";  // article, website, event ou profile
  $headImage = "e_003-atelier cuisine LEGUMINEUSES";
  $headUrl = "pg/p_002-alimentation";
  $headStyle = "pg-projects";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>
  <style>
    .christmas {
      margin: -30px;

      @media (width <= 780px) {
        margin: -20px;
      }
    }
  </style>
</head>

<body>
  <header>
    <?php
      $pgTitle = "Ateliers cuisine | Inviter à changer nos habitudes..";
      $retour = "Évènements";
      include "../assets/components/header-pg.php";
      ?>
  </header>
  <main>
    <article class="box"">
      <div class="christmas">
        <img src="../assets/img/christmas-bg.webp" alt="bandeau spécial noël" loading="lazy">
      </div>
      <small>Pour en savoir plus sur comment sont organisés ces ateliers     <a href="#Organisation">↓    voir plus bas    ↓</a></small>
      <div class="grid twin-img" style="z-index: 5;">
        <h2>Prochains rendez-vous</h2>
        <small style="text-align: right;">Lieu : Cholet      9h30-14h00*<br><em>* sauf yoga & cuisine jusqu'à 15h00</em></small>
      </div>
      <div class="navmobile">
        <small>
          <a href="#box1">» céréales</a>   <a href="#box2">» légumineuses1</a>   <a href="#box3">» légumineuses2</a>   <a href="#box4">» tartes & tourtes</a>   <a href="#box5">» yoga & cuisine</a>
        </small>
      </div>
      <div class="wrap">
        <section class="eventBox" id="box1">
          <img src="../assets/img/e_005-atelier cuisine CEREALES.webp" alt="image date événement" width="10vw">
          <div class="txtBox">
            <p>Pizza, crumble, farçis, burgers... Apprenez à cuisiner les céréales complètes et semi complètes avec ou sans gluten sous différentes formes avec des recettes inédites inspirées de Gilles Daveau.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-cereales-avril"
              title="Page d'inscription sur HelloAsso"><span class="btn _text">mercredi 30 avril 2025</span></a>
            </div>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-cereales-mai-1"
              title="Page d'inscription sur HelloAsso"><span class="btn _text">samedi 17 mai 2025</span></a>
            </div>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-cereales-mai-2"
              title="Page d'inscription sur HelloAsso"><span class="btn _text">mercredi 21 mai 2025</span></a>
            </div>
          </div>
        </section>
        <section class="eventBox" id="box2">
          <img src="../assets/img/e_004-atelier cuisine LEGUMINEUSES 1.webp" alt="image date événement" width="10vw">
          <div class="txtBox">
            <p>Autour de 5 préparations inspirées des recettes de Gilles Daveau, il vous sera possible de requestionner vos habitudes alimentaires en laissant plus de places aux légumineuses bio.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-legumineuses-1-fevr"
              title="Page d'inscription sur HelloAsso"><span class="btn _text">samedi 8 févr 2025</span></a>
            </div>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-legumineuses-1-juin"
              title="Page d'inscription sur HelloAsso"><span class="btn _text">samedi 7 juin 2025</span></a>
            </div>
          </div>
        </section>
        <section class="eventBox" id="box3">
          <img src="../assets/img/e_004-atelier cuisine LEGUMINEUSES 2.webp" alt="image date événement">
          <div class="txtBox">
            <p>C'est incroyable tout ce que l'on peut faire avec des légumineuses. Ce deuxième atelier vous permettra de découvrir d'autres idées autour de ces aliments incontournables pour une alimentation durable.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-legumineuses-2"
              title="Page d'inscription sur HelloAsso"><span class="btn _text">mercredi 19 févr 2025</span></a>
            </div>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-legumineuses-2-juil"
              title="Page d'inscription sur HelloAsso"><span class="btn _text">mercredi 2 juil 2025</span></a>
            </div>
          </div>
        </section>
        <section class="eventBox" id="box4">
          <img src="../assets/img/e_006-atelier cuisine TARTES et TOURTES.webp" alt="image date événement">
          <div class="txtBox">
            <p>Autour d'une recette de pâte simple, rapide et inratable nous revisiterons tous les formats des quiches, tartes, et tourtes , sucrées ou salées.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-tartes-et-tourtes-mars"
                title="Page d'inscription sur HelloAsso"><span class="btn _text">mercredi 19 mars 2025</span></a>
            </div>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-tartes-et-tourtes-avril"
                title="Page d'inscription sur HelloAsso"><span class="btn _text">samedi 5 avril 2025</span></a>
            </div>
          </div>
        </section>
        <section class="eventBox" id="box5">
          <img src="../assets/img/e_006-atelier cuisine YOGA.webp" alt="image date événement">
          <div class="txtBox">
            <p>Après une séance de yoga accessible et complète, qui vous permettra de vous reconnecter à votre corps, vous cuisinerez et partagerez en toute convivialité quelques plats à base de céréales et de légumineuses bio.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-yoga-cuisine"
                title="Page d'inscription sur HelloAsso"><span class="btn _text">vendredi 21 mars 2025</span></a>
            </div>
          </div>
        </section>
      </div>
      <p style="text-align: center;">
        N'oubliez pas votre tablier, des contenants pour le partage de fin d'atelier et de quoi écrire.    A bientôt.<br>
        <small>( atelier yoga : prévoir un tapis )</small>
      </p>
    </article>
    <article class="box" id="Organisation">
      <h2>Organisation</h2>
      <p style="text-align: center;">Les ateliers se déroulent à <strong>Cholet de 9h30 à 14h00</strong> avec un petit groupe de <strong>6 participants</strong>.</p>
      <p>Après avoir échangé sur nos habitudes alimentaires nous préparons les plats selon le thème choisi, déjeunons ensemble et partageons nos préparations.</p>
      <h2>Partenariat</h2>
      <section class="grid g30">
        <a href="https://www.biocoop-cholet.fr/" title="biocoop-cholet (site web)" target="_blank"><img src="../assets/img/e_007-logo_biocoop.webp" alt="vignette cliquable du partenaire Biocoop" loading="lazy" style="max-width: 60%;"></a>
        <p>Nos ateliers s’inspirent d’une <strong>cuisine alternative et nourricière</strong> : une alimentation qui <strong>remet au centre légumineuses et céréales</strong> à partir de produits de qualité, pour notre santé, notre budget et l’environnement. Dans le cadre de notre partenariat avec la Biocoop nous nous engageons à n’utiliser que des produits bio.</p>
      </section>
      <h2>Nos valeurs</h2>
      <section class="grid g60">
        <div>
          <p>
            Nous croyons à l’efficacité du faire ensemble, <strong>apprendre les uns des autres</strong> favorise notre enthousiasme, notre confiance réciproque et nous encouragent plus facilement à changer nos comportements. Les plats sont préparés à partir de <strong>recettes simples</strong> qui sont <strong>déclinables</strong> selon les saisons, et qui peuvent être cuisinés au quotidien.
          </p>
          <p>
            Ces ateliers sont <strong>ouverts à tous</strong> ceux qui souhaitent modifier leur alimentation en utilisant <strong>moins de produits hyper transformés</strong> qui sont néfastes à notre santé. Ils ont pour <strong>ambition de sensibiliser, convaincre et accompagner</strong>. 
          </p>
        </div>
        <img src="../assets/img/e_003-atelier cuisine LEGUMINEUSES.webp" alt="vue sur l'atelier en action" loading="lazy">
      </section>
      <h2>À noter aussi...</h2>
      <section class="grid g30">
        <img src="../assets/img/e_007-Lentilles corail.webp" alt="lentilles corail" loading="lazy">
        <div>
          <p>Les personnes intolérantes au gluten sont les bienvenues puisque la plupart de nos recettes peuvent être déclinées sans gluten.</p>
          <p>Les jeunes enfants peuvent participer s’ils sont accompagnés.</p>
          <p>Nos tarifs sont étudiés au plus juste pour être accessibles au plus grand nombre mais pour permettre aussi l’utilisation de produits locaux de qualité.</p>
        </div>
      </section>
      <br><h2 class="svgAlign">
        <svg class="icon" id="icon-mail" aria-hidden="true" viewBox="0 0 24 24">
          <path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4.236l-8 4.882-8-4.882V6h16v2.236z" />
        </svg> contact
      </h2>
      <p>
        <a href="mailto:inicitoy@laposte.net?subject=Ateliers cuisine&amp;body=Bonjour, ..." target="_blank"
          rel="noopener noreferer" title="N'hésitez pas à nous faire part de vos suggestions ou critiques.."
          moz-do-not-send="true">inicitoy@laposte.net</a>    <small>ou    07 68 39 40 71</small>
      </p>
      <p style="text-align: center;"><br><small>S'inscrire     <a href="#top">↑    en haut     ↑    (en choisissant une date)</a></small></p>
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