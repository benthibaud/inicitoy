<div class="header-box" id="top">
  <div class="title">
    <?php echo "<h6>$pgName</h6>"; ?>
    <?php echo "<h1>$pgTitle</h1>"; ?>
  </div>
  <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>
  <nav>
    <input id="burgerBtn-toggle" type="checkbox" />
    <label class="burgerBtn" for="burgerBtn-toggle">
      <div class="burgerBtn_icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </label>
    <div class="menu">
      <a href="<?php echo ($currentPage == 'about.php') ? '#' : 'about.php'; ?>" <?php if($currentPage == 'about.php') echo 'class="active"'; ?> >Qui sommes-nous ?</a>
      <a href="<?php echo ($currentPage == 'index.php') ? '#' : 'index.php'; ?>" <?php if($currentPage == 'index.php') echo 'class="active"'; ?> >À la une</a>
      <a href="<?php echo ($currentPage == 'focus.php') ? '#' : 'focus.php'; ?>" <?php if($currentPage == 'focus.php') echo 'class="active"'; ?> >Dossiers</a>
      <a href="<?php echo ($currentPage == 'event.php') ? '#' : 'event.php'; ?>" <?php if($currentPage == 'event.php') echo 'class="active"'; ?> >Évènements</a>
      <a href="<?php echo ($currentPage == 'projects.php') ? '#' : 'projects.php'; ?>" <?php if($currentPage == 'projects.php') echo 'class="active"'; ?> >Projets</a>
      <a href="<?php echo ($currentPage == 'quest.php') ? '#' : 'quest.php'; ?>" <?php if($currentPage == 'quest.php') echo 'class="active"'; ?> >Interpellations</a>
      <a href="<?php echo ($currentPage == 'links.php') ? '#' : 'links.php'; ?>" <?php if($currentPage == 'links.php') echo 'class="active"'; ?> >Liens</a>
    </div>
  </nav>
  <div class="site-logo">
    <a href="https://inicitoy.toile-libre.org" title="accueil" rel="home"></a>
  </div>
  <!-- la classe vide sert pour la troisième case du grid qui sert à centrer le logo en mode responsive -->
  <div class="vide"></div>
</div>
