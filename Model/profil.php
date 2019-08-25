<?php
    function get_user_profil($bdd, $id_user){
        $get_profil = $bdd->prepare("SELECT * FROM RA_DESPRES_personne WHERE id_pers = ?");
        $get_profil->execute(array($id_user));
        return $get_profil;
    }

    function nb_msg_profil($bdd, $id_user){
        $get_msg = $bdd->prepare("SELECT id_msg FROM RA_DESPRES_message WHERE id_auteur = ?");
        $get_msg->execute(array($id_user));
        return $get_msg->rowCount();
    }

    function nb_sujet_profil($bdd, $id_user){
        $get_sujet = $bdd->prepare("SELECT id_sujet FROM RA_DESPRES_sujet WHERE id_auteur = ?");
        $get_sujet->execute(array($id_user));
        return $get_sujet->rowCount();
    }

    function privilege_profil($bdd, $id_user){
        $get_privilege = $bdd->prepare("SELECT privilege FROM RA_DESPRES_personne NATURAL JOIN RA_DESPRES_privilege WHERE id_pers = ?");
        $get_privilege->execute(array($id_user));
        return $get_privilege->fetch();
    }

    function get_sujet_profil($bdd, $id_user){
        $sujet_profil = $bdd->prepare("SELECT * FROM RA_DESPRES_sujet WHERE id_auteur = ? ORDER BY date_post DESC LIMIT 10");
        $sujet_profil->execute(array($id_user));
        return $sujet_profil;
    }

    function get_msg_profil($bdd, $id_user){
        $msg_profil = $bdd->prepare("SELECT * FROM RA_DESPRES_message WHERE id_auteur = ? ORDER BY date_post DESC LIMIT 10");
        $msg_profil->execute(array($id_user));
        return $msg_profil;
    }

    function nb_msg_by_theme_profil($bdd,$sujet){
        $nb= $bdd->prepare('SELECT id_msg FROM RA_DESPRES_message WHERE id_sujet=?');
		$nb->execute(array($sujet['id_sujet']));
        return $nb->rowCount();
    }
?>