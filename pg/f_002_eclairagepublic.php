<!DOCTYPE html>
<html lang="fr">

<head>
  <?php
  $headTitle = "Éclairage public | Comment le rénover ?";
  $headKeywords = "éclairage, public, économies, LED, électronique, trames noires, LPO, méthode, extinction, éteindre, la ville éteint ses lumières, détection, Jean-Michel Tricoire, ";
  $headDescription = "Avec les LED, on divise sa conso par 3. Mais avec l’électronique, on peut encore diviser ce chiffre par 3 ! Une « nouvelle culture » du juste éclairage dès la conception d’un projet…";
  $headType = "article";  // article, website, event ou profile
  $headImage = "f_002-SEO";
  $headUrl = "pg/f_002_eclairagepublic";
  $headStyle = "pg-focus";
  $assetPath = "../assets";

  include '../assets/components/head-SEO.php';
  ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../assets/styles/pg-extra-swiper.css" />
</head>

<body>
  <header>
    <?php
      $pgTitle = "Dossier : Rénovation de l'éclairage public";
      $retour = "Dossiers";
      include "../assets/components/header-pg.php";
      ?>
  </header>
  <main>
    <section id="intro" class="grid g30 box">
      <iframe child-src="https://www.youtube.com/embed/ilD-VrGF-Wk"
        srcdoc="<style>*{overflow:hidden; background:black} img{position:absolute;width:100%;top:0;bottom:0;margin:auto}</style><a href='https://www.youtube.com/embed/ilD-VrGF-Wk?rel=0&amp;amp;showinfo=0&amp;autoplay=1&amp;loop=0&amp;enablejsapi=0' title='Accélérer la rénovation de l`éclairage public | Innopolis Expo'><img src=../assets/img/f_002-yt_icône.webp alt='Accélérer la rénovation de l'éclairage public' loading='lazy'></a>"
        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
        title="Lecteur vidéo youtube"></iframe>
      <div>
        <h2>La vidéo</h2>
        <p>
          C'est une table ronde digitale organisée par
          <a href="https://territorial.zepros.fr/journaux/territorial/numeros/territorial-38">ZePros Territorial</a>
          et <a href="https://innopolis-expo.com/">Innopolis Expo</a> :
        </p>
        <p style="text-align: center">
          <strong>« Face à la crise énergétique :<br />la rénovation de l'éclairage public »</strong>
        </p>
      </div>
    </section>
    <section id="slideshow" class="box">
      <h2>Quelques enseignements tirés de la vidéo</h2>
      <!-- Swiper -->
      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
        <div class="parallax-bg" data-swiper-parallax="-23%"></div>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
              <h2>...Enjeux</h2>
              <p>
                41 % de la consommation des collectivités<br />
                <span class="small">soit 5,6 TW/h en 2021</span>
              </p>
              <p>un parc vieillissant <br />
                <span class="small">taux de renouvellement de 3 à 4 % par an</span>
              </p>
              <h2>...Un nouveau contexte</h2>
              <p>augmentation rapide du prix de l’énergie</p>
              <p>disponibilité des technologies LED et tout se que permet l'électronique pour un pilotage à la carte</p>
              <p>nouveau cadre règlementaire (loi 2018) autour de la biodiversité (trames noires,..)</p>
              <p style="text-align: center;">
                <span class="small"><br />( note: les financements trop changeants d'une année à l'autre ne sont
                  pas abordés dans cette présentation )</span>
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
              <h2>...Phase étude énergivore mais indispensable</h2>
              <h3>..L'existant</h3>
              <p>Comment fonctionne et est structurée la ville de jour et de nuit ?<br>
              État du parc matériel et sa capacité d'adaptation aux LED<br>
              Capacité d'intervention et de maintenance des équipes</p>
              <h3>..Lister les besoins d'éclairage</h3>
              <p>Prolonger nos activités la nuit <small>(travail, loisirs, shopping, déplacements,..)</small><br>
              Définir les zones de vie nocturne <small>(différentes selon les saisons)</small><br>
              Mettre en valeur <small>un monument</small>, répondre à un usage <small>ponctuel d'une salle</small>, repérer <small>les transports en commun</small>,..<br>
              Réglementer l'éclairage privé pour les trames noires <small>(commerces, co-propriétés,..)</small></p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
              <h3>..Urbanisme « Lumières »</h3>
              <p>
                l’ère électronique permet d’avoir un pilotage très fin du réseau<br />
                <span class="small">plages d'extinction et/ou niveaux d'éclairement différenciés selon les quartiers
                  et leur fréquentation, télésurveillance des pannes,..</span>
              </p>
              <h2>La mise en oeuvre peut se faire..</h2>
              <p>en mode régie : la collectivité assume elle-même le travail</p>
              <p>via des marchés de travaux et/ou de maintenance</p>
              <p>ou via des marchés de performances énergétiques avec des obligations d’économies d’énergie</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
              <h2>à Pau, sur un lotissement,</h2>
              <p>3 scénarios ont été testés avec ou sans boost lors des détections de passage</p>
              <div class="grid g42">
                <div class="tableau">
                  <p>avant les LED</p>
                  <p class="right"><strong>25,73</strong> <small>kW/h /jour</small></p>
                  <p><strong>100 % toute la nuit</strong></p>
                  <p class="right"><strong>7,72</strong> <small>kW/h /jour</small></p>
                  <p><strong>100 %</strong> jusqu’à 20 h<br /><strong>puis veille</strong> à 10 %<br /><strong>+
                      boost</strong> à 50 % /détection</p>
                  <p class="right"><strong>3,09</strong> <small>kW/h /jour</small></p>
                  <p><strong>veille + boost uniquement</strong></p>
                  <p class="right"><strong>2,20</strong> <small>kW/h /jour</small></p>
                </div>
                <img src="../assets/img/f_002-eclairagePau-900.webp"
                  alt="Copie d'écran - économies réalisées sur un lotissement palois" loading="lazy" />
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
              <h2>...Méthode</h2>
              <p>diagnostic photométrique électrique interne (2009) et transposé sur cartographie</p>
              <p>évaluation des compétences internes et plan de formation</p>
              <p>définition de priorités d’intervention</p>
              <p style="padding-bottom: 10px"><br /><em>Après un succès mitigé en 2013,</em></p>
              <p style="margin-left: 30px">
                Schéma Directeur d’Aménagement des Lumières (SDAL),<br />
                <span class="small">recherche d'une ambiance lumineuse plus qualitative</span>
              </p>
              <p style="margin-left: 30px">
                changement de culture interne<br />
                <span class="small">l’éclairage devient un « urbanisme lumière » à co-établir dans chaque nouveau
                  projet</span>
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
              <h2>Quelques remarques</h2>
              <p>un parc vétuste : c’est lui qui décide vos interventions</p>
              <p>la maintenance préventive diminue les pannes et dégage du temps pour la réflexion</p>
              <p style="padding-bottom: 10px">en régie,</p>
              <p style="margin-left: 30px">
                le bureau d'études et l'équipe d'exploitation se cotoient<br />
                <span class="small">la maintenabilité des installations est plus aboutie</span>
              </p>
              <p style="margin-left: 30px">la stratégie « achats » bénéficie de la massification des besoins</p>
              <p style="margin-left: 30px">cela permet d’allouer entièrement l’investissement à l’acquisition de
                fournitures</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
              <h2>à Pessac (Agglo bordelaise)</h2>
              <div class="grid twin-img">
                <img src="../assets/img/f_002-eclairagePessac-900.gif"
                  alt="slides de présentation extraites de la vidéo" loading="lazy" />
                <img src="../assets/img/f_002-coutPessac-900.webp" alt="Copie d'écran - coût Pessac" loading="lazy" />
              </div>
            </div>
          </div>
          <!-- <div class="swiper-slide">
            <div class="subtitle" data-swiper-parallax="-200">
            </div>
          </div> -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
      <a href="https://www.fnccr.asso.fr/" target="_blank"><small>* lien vers la FNCCR citée en fin de vidéo</small></a>
    </section>
    <div class="mainPattern">
      <section id="interview" class="box">
        <h2>Entretien avec ...</h2>
        <div class="flex col">
          <img src="../assets/img/f_002-entretien-jm_tricoire.webp" alt="bandeau interview JM Tricoire" loading="lazy"
            width="60%" />
          <p style="text-align: center">
            <strong>   <a href="https://www.lpo.fr/" target="_blank" title="LPO nationale">LPO fr</a>       <a
                href="https://lpo-anjou.org/" target="_blank" title="LPO Anjou">LPO Anjou</a>       
              <a href="https://mauges-nature.blogspot.com/" target="_blank" title="groupe LPO Mauges">LPO Mauges</a>   
                 <a href="https://www.anpcen.fr/" target="_blank"
                title="Association nationale pour la protection du ciel et de l’environnement nocturnes">ANPCEN</a>   </strong>
          </p>
        </div>
        <div class="trimTxt">
          <input type="checkbox" id="toggle" class="toggle-input" />
          <div class="fullTxt">
            <p><strong>Entretien avec Jean-Michel Tricoire, membre de la LPO et de l’Association nationale pour la
                protection du ciel et de l’environnement nocturnes (ANPCEN).</strong></p>
            <p>
              <strong>Jean-Michel Tricoire -</strong> A Cholet l’extinction des lumières se fait entre minuit et 5 h
              tous les jours. L’idéal pour la biodiversité serait qu’il n’y ait plus de
              lumière du tout. C’est important de se caler avec la nature, l’hiver par exemple la faune et la flore
              sont au ralenti, mais sur la période printemps-été l’idéal serait qu’il n’y ait
              plus de lumière du tout. Certaines communes de Cholet Agglomération profitent des journées les plus
              longues pour ne pas allumer du tout leur éclairage de la mi-mai à la mi-août.
            </p>
            <p><strong>Initiatives Citoyennes Choletaises - Quels sont les impacts de la lumière sur la biodiversité
                ?</strong></p>
            <p>
              <strong>JMT -</strong> En fait toutes les espèces sont impactées car la lumière agit sur les secrétions
              hormonales des espèces diurnes et nocturnes. Concernant les amphibiens qui
              sont des animaux plutôt nocturnes la lumière peut perturber la reproduction, les pontes. Les petits
              mammifères, en milieu urbain, principalement les hérissons et les chauves souris,
              voient leur activité réduite, quant aux insectes, ils sont attirés par la lumière et s’épuisent autour
              des lampadaires, donc moins de pollinisation nocturne. On évalue à 40 % la
              baisse de la pollinisation due à la pollution lumineuse.
            </p>
            <p>
              Les oiseaux, eux, sont désorientés, la luminosité modifie leurs repères dans les parcours de migration,
              et certaines espèces d’oiseaux perturbés se mettent à chanter la nuit, ce qui
              conduit à de l’épuisement.
            </p>
            <p>
              Les végétaux souffrent aussi de l’éclairage public la nuit car la lumière est un signal, et les plantes
              peuvent être stimulées plus longtemps, ce qui les fragilise, et elles sont
              donc plus sensibles aux maladies.
            </p>
            <p>Quant aux humains, c’est dans le noir que le cerveau sécrète la mélatonine l’hormone de
              l’endormissement. »</p>
            <p>
              Il faut savoir que les impacts sont dus à l’intensité lumineuse mais aussi à la température de couleur.
              Une couleur chaude qui tend vers le jaune est moins nocive qu’une couleur
              froide qui tend vers le bleu. Beaucoup de collectivités ont remplacé leur éclairage par des leds pour
              des raisons économiques, mais reste à privilégier les couleurs chaudes.
            </p>
            <p><strong>ICC - Qu’est ce que l’on pourrait améliorer pour protéger encore mieux la biodiversité
                ?</strong></p>
            <p>
              <strong>JMT -</strong> La France a une législation très développée, une des plus élaborée au monde dans
              le domaine, mais malheureusement peu appliquée. Prenons l’exemple des vitrines
              des magasins dont l’éclairage devrait s’éteindre 1h après la fermeture. Il en est de même pour les
              chantiers. C’est rarement respecté. La loi exige que les luminaires aient une ULR
              de 0 %, l’ULR est la mesure qui indique le pourcentage de lumière vers le ciel mais il y a encore des
              nouvelles installations qui ne prennent pas en compte cette réglementation comme
              par exemple au lycée Renaudeau à Cholet.
            </p>
            <p>
              En novembre 2023, le pouvoir de police du maire a été renforcé par un décret qui l’autorise à dresser
              des contraventions en cas de pollution lumineuse :
              <a href="https://www.ecologie.gouv.fr/reglementation-publicite-enseignes-et-preenseignes" target="_blank"
                title="explication de la réglementation (source gouvernementale)">réglementation de la
                publicité extérieure, enseignes et préenseignes</a>.
            </p>
            <p>
              On peut dire quand même que les collectivités font leur part restent à convaincre les ménages, les
              commerçants, et surtout les entreprises car le gros problème se situe dans les
              zones d’activité.
            </p>
            <p><strong>ICC - Quelles solutions pour celles et ceux qui doivent se déplacer la nuit et qui se sentent
                en insécurité ?</strong></p>
            <p>
              <strong>JMT -</strong> Il faut rappeler qu’il n’y a pas de lien de causalité entre l’extinction des
              éclairages et le nombre d’agressions. Souvent les gens ont peur non pas de la nuit
              mais du fait de se retrouver seul dans une rue, ou dans tout un pâté de maisons. Je ne suis pas
              favorable au techno-solutionnisme qui consisterait à équiper les communes en
              détecteurs de mouvement. Une bonne lampe torche ou la lampe du téléphone portable sont suffisantes. On
              peut s’inspirer des bonnes pratiques des territoires voisins :
              <a href="https://www.sevremoine.fr/wp-content/uploads/2023/06/Fiche-Eclairage-Public-MAJ27062023.pdf"
                target="_blank" title="flyer qui synthétise les résultats obtenus sur la commune de Sèvremoine">gestion
                de l'éclairage
                public à Sèvremoine</a>.
            </p>
            <p><strong>ICC - Vous restez optimiste ?</strong></p>
            <p>
              <strong>JMT -</strong> Oui. Depuis un an la pollution lumineuse en France aurait diminué. L’effet prix y
              est sans doute pour quelque chose. Est-ce que cela va durer ? C’est déjà une
              avancée d’arrêter d’éclairer pendant 5 ou 6h. De plus en plus de territoires ont commencé à identifier
              leurs trames noires qui sont un réseau de corridors empruntés par les espèces
              nocturnes. Les gens sont de plus en plus sensibilisés et le sujet fait débat ici pour l’éclairage d’un
              château, là pour l’éclairage d’un parking.
            </p>
          </div>
          <label for="toggle" class="toggle-label">
            <span class="label-text"></span>
          </label>
        </div>
      </section>
      <section id="Moineau" class="box event">
        <h2>Ils ont besoin de nous</h2>
        <p>
          <strong>Jusqu'au 15 mai</strong> prochain, la LPO-Anjou organise un recensement des <strong>derniers sites
            de reproduction du « moineau friquet »</strong>. En effet, sa population est en
          fort déclin..<br />
        </p>
        <p>
          Vous pouvez les aider si vous en voyez en les contactant par mail :
          <a href="mailto:anjou.accueil@lpo.fr" target="_blank" rel="noopener noreferer"
            title="mail de l'association LPO-Anjou">anjou.accueil@lpo.fr</a>
        </p>
        <img src="../assets/img/f_002-Moineau_friquet.webp" alt="description détaillée du Moineau Friquet"
          loading="lazy" />
      </section>
    </div>
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

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      keyboard: {
        enabled: true,
      },
      speed: 600,
      parallax: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>