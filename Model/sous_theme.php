<?php
  $sous_themes=$bdd->prepare("SELECT * FROM RA_DESPRES_theme WHERE id_parent=? ORDER BY id_theme");
  $sous_themes->execute(array($theme['id_theme']));
?>
