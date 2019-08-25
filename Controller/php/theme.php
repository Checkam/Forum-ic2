<?php
  require($path['connexion_bdd']);
  include($path['theme_m']);
  $nb_theme=0;
?>
<div class="col-lg-9 my-3">
  <?
    while($theme=$themes->fetch()){
      include($path['theme_v']);
    ?>
    <div class="drop_theme" class="px-0">
      <?
      include($path['sous_theme_c']);
      ?>
    </div>
    <?
  }
  unset($bdd);
  ?>
</div>
