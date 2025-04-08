<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
      $headTitle = "Évènements | rencontres, visites, retours d’expériences,..";
      $headKeywords = "atelier, cuisine, Gilles, Daveau, échanges, expert, intervenant, questions, engagement, jeunes, politique de la ville, sociologue, ";
      $headDescription = "Résumés des interventions et/ou les liens et documents promis, les prochains évènements à l’agenda, des visites et rencontres faites ou à venir, etc.";
      $headType = "website";  // article, website, event ou profile
      $headImage = "e_000_event";
      $headUrl = "event";
      $headStyle = "event";
      $assetPath = "./assets";

      include './assets/components/head-SEO.php';
      ?>
</head>

<body>
  <header>
    <?php
      $pgName = "Évènements";
      $pgTitle = "Rencontres / Échanges";
      
      include './assets/components/header.php';
      ?>
  </header>
  <main>
    <div class="sous-titre">Nous organisons plusieurs fois par an des rencontres autour d'un thème</div>
    <div class="mainPattern">
      <section id="left">
        <article id="ateliers_next" class="box">
          <h3>Prochains ateliers cuisine</h3>
          <h5>1er semestre 2025</h5>
          <section class="grid event">
            <div>
              <p>Ateliers à Cholet basés sur la cuisine alternative définie par Gilles DAVEAU..</p>
              <div class="displayBtn" style="justify-content: center;">
                <a href="./pg/e_003-ateliers cuisine.php"
                title="Page d'infos complémentaires sur les ateliers cuisine"><span class="btn _text">infos &<br>inscriptions</span></a>
              </div>
            </div>
            <div>
              <p class="dark">mercredi 30 avril 2025    9h30-14h <br><strong>Céréales</strong></p>
              <p class="dark">samedi 17 mai 2025    9h30-14h <br><strong>Céréales</strong></p>
              <p class="dark">samedi 7 juin 2025    9h30-14h <br><strong>Légumineuses 1</strong></p>
              <p class="dark">mercredi 2 juillet 2025    9h30-14h <br><strong>Légumineuses 2</strong></p>
            </div>
          </section>
        </article>
        <article id="ateliers" class="box">
          <h3>Précédents ateliers cuisine</h3>
          <h5>automne/hiver 2024</h5>
          <section class="grid event">
            <img src="./assets/img/e_003-atelier cuisine CEREALES.webp" alt="image date événement">
            <div>
              <p><strong>atelier « Céréales »</strong></p>
              <p>Au menu : crumble d'automne, légumes farcis, galettes aux flocons d'avoine et pizza polenta. Des céréales bio complètes ou semi complètes : millet, sarrasin, maïs et avoine.</p>
            </div>
          </section>
          <section class="grid event">
            <img src="./assets/img/e_003-atelier cuisine LEGUMINEUSES.webp" alt="image date événement">
            <div>
              <p><strong>atelier « Légumineuses 1 »</strong></p>
              <p>Au menu : dhal et pain à base de lentilles, chili, cake aux pois chiches et autres utilisations surprenantes des légumineuses.</p>
            </div>
          </section>
        </article>
        <article class="box" id="RDV">
          <h3>Assiette Citoyenne</h3>
          <h5>sept 2024</h5>
          <section class="grid g60">
            <div>
              <p>Nous avons réuni quelques convives autour d’un repas selon le concept d'« assiette citoyenne ». Nous
                vous en disons plus dans le lien ci-dessous :</p>
              <div class="displayBtn">
                <a href="./pg/p_002-alimentation.php" title="vers le compte rendu de la journée"><span
                    class="btn _text">voir</span></a><em>ce qui s'y est passé</em>
              </div>
            </div>
            <img src="./assets/img/e_002-SEO.webp" alt="image date événement">
          </section>
        </article>
        <article id="engagt" class="box">
          <h3>L'engagement des jeunes</h3>
          <h5>mai 2023</h5>
          <p>
            Deux sociologues, G. Houdeville et J. Launay, ont proposé leurs réflexions sur différentes mesures dédiées à
            la jeunesse et notamment comment attirer les "décrocheurs scolaires" vers ces
            dispositifs.
          </p>
          <div class="displayBtn">
            <a href="./pg/e_001_engagt.php" title="invitation qui avait été faite à l'époque"><span
                class="btn _text">voir</span></a><em>l'invitation faite à l'époque</em>
          </div>
        </article>
        <article id="presentAsso" class="box">
          <h3>Lancement officiel de l'association</h3>
          <h5>mars 2023</h5>
          <p>Après une présentation générale de l'association de ses objectifs et son ambition, ont pu adhérer ceux qui
            le souhaitaient.</p>
          <p>
            Parmi, les sujets semblant intéresser une partie de l'auditoire, il y a eu ces changements de fonctionnement
            d'un certain nombre de rues à Cholet. Ils semblent être faits sans
            concertation de manière arbitraire et avec des choix contestables aboutissant à des situations ubuesques..
          </p>
        </article>
        <article id="polville" class="box">
          <h3>Politique de la ville</h3>
          <h5>décembre 2022</h5>
          <p>
            La politique de la ville qui avait, dans ses prémisses, pour objectif d'offrir un habitat décent au plus
            grand nombre a évolué, à partir de 1988, vers des actions ciblées destinées aux
            quartiers prioritaires.
          </p>
          <p>
            Ce qui était appelé Commissariat Général à l'Égalité du Territoire est devenu Ministère/ Secrétariat d'État
            à la Ville, Cependant, il y a souvent une grande différence entre l'ambition
            attendue et les résultats réels obtenus.
          </p>
          <p>
            A partir de nombreux exemples, notre conférencier nous a montré les limites de cette politique. Malgré les
            réhabilitations, les améliorations, le sentiment d'exclusion, de déconnexion
            avec le reste de la ville pour ces quartiers reste fort. La mixité sociale prônée par Jean Louis Borloo, par
            exemple, se heurte au fait que dès qu'on s'en sort mieux financièrement, on
            quitte le quartier.
          </p>
          <p>La pauvreté restant ainsi majoritaire à ces endroits, on a des tensions sociales qui éclatent de temps à
            autre.</p>
          <p>
            En conclusion, de gouvernement en gouvernement, on a parfois détricoté ce que faisait l'autre, on a eu
            beaucoup trop de réponses plus politiciennes que répondant au besoin, on est
            souvent passé d'une ambition d'action à grande échelle à un simple saupoudrage,.. Il y a des freins aussi
            comme la participation très modeste des citoyens, un manque de rationalisation
            dans la gestion des quartiers, un ascenseur social quasi à l’arrêt,..
          </p>
        </article>
      </section>
      <section id="right">
        <article id="sommaire" class="box">
          <h3>navigation</h3>
          <p><a href="#ateliers_next">Prochains ateliers</a></p>
          <p><a href="#ateliers">Précédents ateliers cuisine</a></p>
          <p><a href="#RDV">Repas Citoyen</a></p>
          <p><a href="#engagt">L'engagement des jeunes</a></p>
          <p><a href="#presentAsso">Lancement de l'association</a></p>
          <p><a href="#polville">Politique de la ville</a></p>
        </article>
        <?php include './assets/components/contact.php'; ?>
      </section>
    </div>
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