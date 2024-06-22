<?php
 $pages = array( // tableau associant une valeur au contenu de la variable $retour
   'Index' => 'index.php',
   'Dossiers' => 'focus.php',
   'Évènements' => 'event.php',
   'Projets' => 'projects.php',
   'Interpellations' => 'quest.php',
   'Liens' => 'links.php'
 );
 $interTxt = '" title="retour > ';
?>
<div class="header-box">
  <div class="left">
    <div class="btnColor">
      <a href="../<?php echo isset($pages[$retour]) ? $pages[$retour] . $interTxt . $retour : '#'; ?>">« Retour</a>
    </div>
    <div class="title">
      <?php echo "<h1>$pgTitle</h1>"; ?>
    </div>
  </div>
  <div class="site-logo">
    <a href="https://inicitoy.toile-libre.org" title="accueil" rel="home"></a>
  </div>
</div>
