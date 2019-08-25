<?php
    require($path['connexion_bdd']);
    $theme = $_GET['theme'];
    setcookie("theme",$theme,time()+3600);
	$sujets = $bdd->prepare("SELECT * FROM RA_DESPRES_sujet WHERE id_theme=? ORDER BY date_post DESC");
	$sujets->execute(array($theme));

    function get_user($bdd,$sujet){
        $auteurs= $bdd->prepare("SELECT pseudo FROM RA_DESPRES_personne WHERE id_pers=?");
		$auteurs->execute(array($sujet['id_auteur']));
        return $auteurs->fetch();
    }

    function nb_message_by_theme($bdd,$sujet){
        $nb= $bdd->prepare('SELECT id_msg FROM RA_DESPRES_message WHERE id_sujet=?');
		$nb->execute(array($sujet['id_sujet']));
        return $nb->rowCount();
    }


?>
