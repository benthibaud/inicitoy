<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Dessine-moi ta rue | Projet participatif";
  $headKeywords = "consultation, participatif, participative, rue, confort, sécurité, attractivité, bitume, parking, ";
  $headDescription = "« Dessine-moi ta rue » a pour objectif de sensibiliser au partage de nos rues entre les différents usagers et de proposer des idées. Quelle serait pour vous la rue « idéale » ?";
  $headType = "article";  // article, website, event ou profile
  $headImage = "p_001-SEO";
  $headUrl = "pg/p_001-dessin-rue";
  $headStyle = "pg-projects";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>
</head>

<body>
  <header>
    <?php
    $pgTitle = "Projet - « Déssine-moi ta rue »";
    $retour = "Projets";
    include "../assets/components/header-pg.php";
    ?>
  </header>
  <main>
    <article class="box">
      <h2>Votre rue vous convient-elle ?</h2>
      <div class="grid">
        <img src="../assets/img/p_001_GDCI_voeux_2024.webp" alt="une rue rendue aux piétons"
          style="max-height: 350px" />
      </div>
      <p style="font-size: small">Lorsqu'une rue est  « libérée »  des voitures, elle retrouve toute une série de
        fonctions oubliées !</p>
      <h3>Contexte choletais</h3>
      <p>
        La ville de Cholet s’est construite, au fil des ans, autour de son développement industriel : secteur textile,
        Thales (ex-Thomson-Csf), l’agro-alimentaire, etc. Beaucoup de ces logements ont
        répondu à des besoins primaires après la seconde guerre mondiale : des potagers, élevage de poules ou lapins,
        des garages pas toujours adaptés aux véhicules actuels, etc.
      </p>
      <h3>Évolution de la rue</h3>
      <div class="grid g60">
        <div>
          <p>
            Tout a évolué depuis : les modes de vie, les modes de déplacement (vélos et trottinettes électriques) , les
            loisirs et la demande des gens (transition écologique, services à proximité,
            commerces,..), etc.
          </p>
          <p>Votre rue est-elle adaptée ?</p>
          <ul>
            <li>à tous les usages</li>
            <li>à tous les publics</li>
            <li>à toutes les mobilités</li>
            <li>aux changements climatiques à venir</li>
          </ul>
        </div>
        <img src="../assets/img/p_001-DessinRue_2.webp" alt="Un trottoir dessiné" />
      </div>
      <br />
      <p style="text-align: center">
        <strong>Donnez nous votre avis →
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSd63Ye5mbbWCRW7mql_5DOaxno-WNSqnXJP4R-5-6of_5PtGg/viewform?vc=0&c=0&w=1&flr=0&usp=mail_form_link"
            title="Quelques questions pour recueillir votre avis" target="_blank">en répondant à ces quelques
            questions</a></strong>.
      </p>
    </article>
  </main>
  <footer>
    <div class="copyright-bar">
      ©
      <?php echo date('Y'); ?><a href="../_QRcode.html"
        title="QR Code pour partager l`url de notre site avec vos proches">Initiatives
        Citoyennes Choletaises</a>
    </div>
  </footer>
  <?php include '../assets/components/js-pgTransition.php'; ?>
</body>

</html>