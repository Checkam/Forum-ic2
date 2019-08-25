<?  
    session_start();
    require($racine.$path['connexion_bdd']);
    $add_sujet = $bdd->prepare("INSERT INTO RA_DESPRES_sujet(titre_sujet,texte,id_auteur,id_theme) VALUE(?,?,?,?)");
    $theme = htmlspecialchars($_GET['theme']);
    $add_sujet->execute(array($titre,$texte,$_SESSION['id_user'],$theme));
    unset($bdd);
?>