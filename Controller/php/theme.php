<?php
  require($path['connexion_bdd']);
  include($path['theme_m']);
  $nb_theme=0;
?>
<div class="col-lg-9 my-3">
  <?php
    while($theme=$themes->fetch()){
      include($path['theme_v']);
    ?>
    <div class="drop_theme" class="px-0">
      <?php
      include($path['sous_theme_c']);
      ?>
    </div>
    <?php
  }
  unset($bdd);
  ?>
</div>
