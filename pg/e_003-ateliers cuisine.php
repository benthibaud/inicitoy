<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Ateliers cuisine | Inviter à changer nos habitudes..";
  $headKeywords = "atelier, cuisine, légumineuses, tartes, tourtes, céréales, Gilles, DAVEAU, assiette, repas, citoyen, alimentation, saine, permaculture, saison, fruits, légumes, moins de viande, ";
  $headDescription = "Des recettes simples pour découvrir qu'il est possible de changer les habitudes que nous inculquent la société, la pub, nos entourages, etc.";
  $headType = "article";  // article, website, event ou profile
  $headImage = "e_003-atelier cuisine LEGUMINEUSES";
  $headUrl = "pg/p_002-alimentation";
  $headStyle = "pg-projects";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>
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
    <article class="box">
      <small>Pour en savoir plus sur comment sont organisés ces ateliers     <a href="#Organisation">↓    voir plus bas    ↓</a></small>
      <h2>Prochain rendez-vous</h2>
      <div class="wrap">
        <section class="eventBox">
          <img src="../assets/img/e_004-atelier cuisine LEGUMINEUSES.webp" alt="image date événement" width="10vw">
          <div class="txtBox">
            <p>Autour de 5 préparations inspirées des recettes de Gilles Daveau, il vous sera possible de requestionner vos habitudes alimentaires en laissant plus de places aux légumineuses bio.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-equilibre-alimentaire"
                title="Page d'inscription sur HelloAsso"><span class="btn _text">inscriptions</span></a>
            </div>
          </div>
        </section>
        <section class="eventBox">
          <img src="../assets/img/e_005-atelier cuisine LEGUMINEUSES.webp" alt="image date événement">
          <div class="txtBox">
            <p>C'est incroyable tout ce que l'on peut faire avec des légumineuses. Ce deuxième atelier vous permettra de découvrir d'autres idées autour de ces aliments incontournables pour une alimentation durable.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-cuisine-equilibre-alimentaire"
                title="Page d'inscription sur HelloAsso"><span class="btn _text">inscriptions</span></a>
            </div>
          </div>
        </section>
        <section class="eventBox">
          <img src="../assets/img/e_006-atelier cuisine TARTES et TOURTES.webp" alt="image date événement">
          <div class="txtBox">
            <p>Autour d'une recette de pâte simple, rapide et inratable nous revisiterons tous les formats des quiches, tartes, et tourtes , sucrées ou salées.</p>
            <div class="displayBtn">
              <a href="https://www.helloasso.com/associations/initiatives-citoyennes-choletaises/evenements/atelier-tartes-et-tourtes"
                title="Page d'inscription sur HelloAsso"><span class="btn _text">inscriptions</span></a>
            </div>
          </div>
        </section>
      </div>
      <p style="text-align: center;">N'oubliez pas votre tablier, des contenants pour le partage de fin d'atelier et de quoi écrire.    A bientôt.</p>
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
      <p style="text-align: center;"><br><small>S'inscrire     <a href="#top">↑    en haut    ↑</a></small></p>
      
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