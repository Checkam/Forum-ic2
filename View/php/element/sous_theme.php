<a class="d-flex justify-content-between py-3 px-3 sous_theme_th1" href="<?php echo $path['index'];?>/?theme=<?php echo $sous_theme['id_theme'];?>">
  <div class="">
      <div><?php  echo $sous_theme['titre_theme'] ?></div>
      <div style="font-size:0.8em"><?php  echo $sous_theme['description'] ?></div>
  </div>
  <div>
    <div class="text-center" style="font-size:1.2em"><?php echo $nb_sujet;?></div>
    <div style="font-size:0.8em"><?php  echo ($nb_sujet>1?"sujets":"sujet");?></div>
  </div>
</a>
