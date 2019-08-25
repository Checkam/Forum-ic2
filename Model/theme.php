<?php
  $themes = $bdd->query("SELECT * FROM RA_DESPRES_theme WHERE id_parent IS NULL ORDER BY id_theme");

  function get_nb_sujet($bdd,$sous_theme){
    $nb_sujet=$bdd->prepare("SELECT id_sujet FROM RA_DESPRES_sujet WHERE id_theme=?");
    $nb_sujet->execute(array($sous_theme['id_theme']));
    return $nb_sujet->rowCount();
  }
?>