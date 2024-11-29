<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <?php
    $headTitle = "Liens utiles et pertinents | pouvant inspirer notre action";
    $headKeywords = "lien, utile, pertinent, ilots, chaleur, urbaine, ZAN, artificialisation, zéro, rafraichir, arbre, eau de pluie, eaux usées, ";
    $headDescription = "Liens concernant la fraîcheur des arbres, des sites très bien documentés, des articles en ligne très pertinents, des décryptages de sujets du moment, etc. ";
    $headType = "website";  // article, website, event ou profile
    $headImage = "L_000_links";
    $headUrl = "links";
    $headStyle = "links";
    $assetPath = "./assets";

    include './assets/components/head-SEO.php';
    ?>
  </head>

<body>
  <header>
    <?php 
      $pgName = "Liens";
      $pgTitle = "Utiles et pertinents"; 
      ?>
    <?php include './assets/components/header.php'; ?>
  </header>
  <main>
    <div class="sous-titre"><span class="stabilo">Ce sont des sites ou des documents qui peuvent nous inspirer</span>
    </div>
    <div class="mainPattern">
      <section id="left">
        <article id="ICU" class="box">
          <h2>Plus fraiche ma ville</h2>
          <p>
            Pour lutter contre les <strong>îlots de chaleur urbaine</strong>, il existe maintenant
            <strong><a href="https://plusfraichemaville.fr/aide-decision" target="_blank"
                title="Site qui recense les solutions pour rafraîchir la ville">ce site internet</a></strong>.
          </p>
          <p>Sa vocation est d'aider les collectivités dans le choix de solutions de rafraîchissement urbain pérennes et
            durables.
          </p>
          <p>Et nous sommes pas tous égaux face à ce phénomène selon <a href="https://www.insee.fr/fr/statistiques/8283129" title="En milieu urbain, les ménages modestes sont en général plus exposés aux îlots de chaleur">cette étude de l'INSEE</a>..</p>
        </article>
        <article id="Assainissement" class="box">
          <h2>Eau : assainissement non collectif</h2>
          <p>
            L'<a title="Site des acteurs du traitement des eaux de la parcelle" href="https://atep-france.fr/"
              target="_blank">ATEP</a> membre du label
            <a title="Site du label Qualipluie" href="https://www.qualipluie.com/" target="_blank">Qualipluie</a> publie
            le
            <a title="Guide de la gestion des eaux non conventionnelles"
              href="https://atep-france.fr/fr/wp-content/uploads/2022/11/Guide_de_l_eau_a_la_parcelle.pdf"
              target="_blank"><strong>Guide de l'eau de la parcelle</strong></a>
            qui parcourt les solutions pour <strong>utilliser les eaux non conventionnelles</strong> : pluie et eaux
            usées traitées.
          </p>
          <p>
            Sur leur site, on trouve aussi :
            <a title="pdf : L'eau de pluie,  une ressource pour la ville"
              href="https://atep-france.fr/fr/wp-content/uploads/2023/06/Les_essentiels_ATEP_N_3_GEP.pdf"
              target="_blank">L'eau de pluie, une ressource pour la ville</a>.
          </p>
          <a href="https://atep-france.fr/fr/wp-content/uploads/2022/11/Guide_de_l_eau_a_la_parcelle.pdf" target="blank"
            title="Guide de la gestion des eaux non conventionnelles"><img
              src="assets/img/L_002-Guide_de_l_eau_a_la_parcelle.webp"
              alt="Guide de la gestion des eaux non conventionnelles" style="max-height: 300px; width: auto"
              loading="lazy" /></a>
        </article>
        <article id="arbresfrais" class="box">
          <h2>Arbres : rafraichissant ?</h2>
          <p>
            Tout sur le
            <strong><a href="https://theconversation.com/dou-vient-le-pouvoir-rafraichissant-des-arbres-en-ville-199906"
                target="_blank" title="article paru sur le site 'The Conversation'.">pouvoir rafraichissant des
                arbres</a></strong>
            en ville.
          </p>
          <a href="https://theconversation.com/dou-vient-le-pouvoir-rafraichissant-des-arbres-en-ville-199906"
            target="_blank" title="article paru sur le site 'The Conversation'">
            <img src="assets/img/L_003-pouvoir_rafraichissant_arbres.webp"
              srcset="assets/img/L_003-pouvoir_rafraichissant_arbres.avif 1x" type="image/avif"
              alt="Descriptif de l'impact d'un arbre en ville" style="max-height: 900px" loading="lazy" />
          </a>
        </article>
        <article id="ZAN" class="box">
          <h2>Loi « Zéro artificialisation nette (ZAN) »</h2>
          <p>Très discutée l’été dernier, voici quelques liens pour mieux comprendre :</p>
          <ul>
            <li>
              <a href="https://www.vie-publique.fr/eclairage/287326-zero-artificialisation-nette-zan-comment-proteger-les-sols"
                target="_blank" title="article présentant ce qu'est le ZAN">Au fait, de quoi parle-t'on ?</a>
            </li>
            <li>
              <a href="https://www.vie-publique.fr/loi/288650-loi-20-juillet-2023-accompagnement-elus-contre-artificialisation-sols"
                target="_blank" title="Essentiel de la loi votée">La Loi du 20 juillet 2023</a>
            </li>
            <li>
              Les questions débattues avant le vote de la loi présentées dans un <strong>« dossier spécial » du Batiweb
                Magazine</strong> de mai 2023. <br /><a
                href="https://heyzine.com/flip-book/batiweb-magazine-7-30052023.html" target="_blank"
                title="consulter le magazine en ligne">voir en ligne</a>
              |
              <a href="https://cdnc.heyzine.com/flip-book/pdf/9b192a691ca0eaa84b29ff218c10714294c10406.pdf"
                title="Télécharger Batiweb mag du 30 mai 2023">télécharger le pdf</a>
            </li>
          </ul>
          <a href="https://www.batiweb.com/actualites/publi-redactionnels/magazine-batiweb-mai-2023-42351"
            target="_blank" title="site Batiweb"><img src="assets/img/L_001-Batiweb_ZAN.webp"
              alt="Image d'accroche pour Batiweb mag spécial ZAN" loading="lazy" /></a>
        </article>
      </section>
      <section id="right">
        <article id="sommaire" class="box">
          <h3>navigation</h3>
          <p><a href="#ICU">Plus fraîche ma ville</a></p>
          <p><a href="#Assainissement">Assainissement non collectif</a></p>
          <p><a href="#arbresfrais">Arbres : rafraichissant ?</a></p>
          <p><a href="#ZAN">Loi « Zéro artificialisation nette (ZAN) »</a></p>
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
  <?php include './assets/components/js-pgTransition.php'; ?>
</body>

</html>