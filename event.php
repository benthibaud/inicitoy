<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
      $headTitle = "Évènements | rencontres, visites, retours d’expériences,..";
      $headKeywords = "échanges, expert, intervenant, questions, engagement, jeunes, politique de la ville, sociologue, ";
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
        <article class="box" id="RDV">
          <h3>Repas Citoyen</h3>
          <h5>dimanche 29 sept 2024</h5>
          <p>Nous vous donnons rendez-vous pour notre prochain « Repas Citoyen » du 29 septembre 2024.</p>
          <div class="displayBtn">
            <a href="./pg/p_002-alimentation.php" title="vers la page qui explique ce que c'est"><span
                class="btn _text">renseignements</span></a>
          </div>
          <div class="displayBtn">
            <a href="./pg/e_002_repas_citoyen.php" title="vers la page d'inscription"><span
                class="btn _text">inscription</span></a>
          </div>
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