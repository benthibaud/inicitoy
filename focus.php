<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Dossiers | Focus et éléments clés pour comprendre</title>
    <meta
      name="description"
      content="La technologie révolutionne l’éclairage public : économies, plus de possibilités,.. Le Design Urbain redistribue les rôles des différents usagers des rues, voyons comment…" />
    <link rel="icon" href="assets/img/favicon.ico" />

    <meta property="og:title" content="Dossiers | Focus et éléments clés pour comprendre" />
    <meta
      property="og:description"
      content="La technologie révolutionne l’éclairage public : économies, plus de possibilités,.. Le Design Urbain redistribue les rôles des différents usagers des rues, voyons comment…" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://inicitoy.toile-libre.org/focus.php" />
    <meta property="og:image" content="https://inicitoy.toile-libre.org/assets/img/f_000_focus.webp" />
    <meta property="og:site_name" content="Initiatives Citoyennes Choletaises" />
    <meta property="og:locale" content="fr_FR" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dossiers | Focus et éléments clés pour comprendre" />
    <meta
      name="twitter:description"
      content="La technologie révolutionne l’éclairage public : économies, plus de possibilités,.. Le Design Urbain redistribue les rôles des différents usagers des rues, voyons comment…" />
    <meta name="twitter:image" content="https://inicitoy.toile-libre.org/assets/img/f_000_focus.webp" />
    <meta name="twitter:url" content="https://inicitoy.toile-libre.org/focus.php" />

    <meta
      name="keywords"
      content="dossier, thème, design urbain, éclairage public, économies, contribuable, énergie, rues, sécurité, initiatives, initiative, citoyen, citoyenne, citoyens, citoyennes, Cholet, choletais, choletaise, choletaises, maine et loire, pays de la loire, 49300, 49, actualité, carnaval, maire, bourdouleix, caractériel, actualite, mouchoir, textile, mode, economie, économie, service, ouest, mauges, association, environnement, municipal, elu, design, urbain, rue, urbanisme, atmosphère, élu, indeminité, indemnite, anne, hardy, sylvie, tolassy, autrement, opposition, opposant, opposante, opposition municipale, économique, economique" />
    <meta name="Author" content="Benoit Thibaud" />
    <link type="text/plain" rel="author" href="https://inicitoy.toile-libre.org/humans.txt" />
    <meta name="robots" content="all" />
    <meta http-equiv="cache-control" content="max-age=259200" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="x-apple-disable-message-reformatting" />

    <link rel="stylesheet" href="./assets/styles/focus.css" />
  </head>
  <body>
    <header>
      <?php
      $pgName = "Dossiers";
      $pgTitle = "Étudier un thème";
      
      include './assets/components/header.php';
      ?>
    </header>
    <main class="mainPattern">
      <section id="left">
        <article id="eclairagepublic" class="box">
          <h2>Rénovation de l'éclairage public</h2>
          <div class="grid g60">
            <div>
              <p>Pau ou Pessac ont obtenu <strong>jusqu'à 91 % d'économies</strong> dans certains de leurs quartiers.</p>
              <p>
                Quelle a été leur démarche ? Quels choix techniques ont-ils fait ? .. D’après les intervenants de cette table ronde,
                <strong>c’est un véritable changement culturel qu’il faut opérer</strong>.
              </p>
            </div>
            <iframe
              child-src="https://www.youtube.com/embed/ilD-VrGF-Wk"
              srcdoc="<style>*{overflow:hidden; background:black} img{position:absolute;width:100%;top:0;bottom:0;margin:auto}</style><a href='https://www.youtube.com/embed/ilD-VrGF-Wk?rel=0&amp;amp;showinfo=0&amp;autoplay=1&amp;loop=0&amp;enablejsapi=0&amp;start=1186' title='Accélérer la rénovation de l`éclairage public | Innopolis Expo'><img src=assets/img/f_002-yt_icône.webp alt='Accélérer la rénovation de l'éclairage public' loading='lazy'></a>"
              frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              title="Lecteur vidéo youtube"></iframe>
          </div>
          <div class="displayBtn">
            <a href="pg/f_002_eclairagepublic.php" title="Plein d'enseignements à partir de cette vidéo"><span class="btn _text">venir</span></a
            ><em>tirer les enseignements de cette table ronde</em>
          </div>
        </article>
        <article id="Design_rues" class="box grid g60">
          <div>
            <h2>« Design Urbain »</h2>
            <p>
              Souvent, <strong>par ses aménagements, une rue déterminera l'usage qui en sera fait</strong>. Le coût de l'énergie, la pollution et le dérèglement climatique remettent en cause les choix
              du passé.
            </p>
            <div class="displayBtn">
              <a href="pg/f_001_design_urbain.php" title="des guides sur le design urbain très complets"><span class="btn _text">voir</span></a
              ><em>les guides à notre disposition</em>
            </div>
          </div>
          <img src="./assets/img/f_001-Design-urbain.webp" alt="Dessiner les rues pour multiplier les usages" loading="lazy" />
        </article>
      </section>
      <section id="right">
        <article id="sommaire" class="box">
          <h3>navigation</h3>
          <p><a href="#eclairagepublic">Rénovation de l'éclairage public</a></p>
          <p><a href="#Design_rues">Design urbain</a></p>
        </article>
        <?php include './assets/components/contact.php'; ?>
      </section>
    </main>
    <footer>
      <div class="copyright-bar">
        ©
        <?php echo date('Y'); ?>
        <a href="_QRcode.html" title="QR Code pour partager l`url de notre site avec vos proches">Initiatives Citoyennes Choletaises</a>
      </div>
    </footer>
    <?php include './assets/components/js-cache.php'; ?>
  </body>
</html>
