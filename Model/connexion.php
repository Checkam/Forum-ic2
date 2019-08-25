<?php
    $requete = $bdd->prepare("SELECT * FROM RA_DESPRES_personne WHERE pseudo = ? AND password = ?");
    $requete->execute(array($pseudo,$password));
?>