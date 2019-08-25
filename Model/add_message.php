<?php  
    session_start();
    require($racine.$path['connexion_bdd']);
    $add_message = $bdd->prepare("INSERT INTO RA_DESPRES_message(texte,id_auteur,id_sujet) VALUE(?,?,?)");
    $sujet = htmlspecialchars($_GET['sujet']);
    $add_message->execute(array($texte,$_SESSION['id_user'],$sujet));
    unset($bdd);
?>
