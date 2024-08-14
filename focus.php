<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <?php
      $headTitle = "Dossiers | Focus et éléments clés pour comprendre";
      $headKeywords = "dossier, thème, design urbain, éclairage public, économies, contribuable, énergie, rues, sécurité, ";
      $headDescription = "Pour aller plus loin dans l'exploration d'un thème, des ressources en ligne permettent de comprendre les enjeux, on peut aussi trouver un certain nombre de solutions expérimentées dans le monde, etc. Cela peut prendre la forme d'un webinaire spécialisé, de guides pdf ou autres, etc..";
      $headType = "website";  // article, website, event ou profile
      $headImage = "f_000_focus";
      $headUrl = "focus";
      $headStyle = "focus";
      $assetPath = "./assets";

      include './assets/components/head-SEO.php';
      ?>
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
