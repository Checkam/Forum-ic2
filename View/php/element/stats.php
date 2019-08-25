  <div class="py-3 px-3 mt-3 theme_th1">Statistique</div>
  <?php  require($path['connexion_bdd']);?>
  <div class="py-3 px-3 sous_theme_th1"><?php  nb_message($bdd); ?> messages</div>
  <div class="py-3 px-3 sous_theme_th1"><?php  nb_sujet($bdd); ?> sujets</div>

  <?php unset($bdd);?>
