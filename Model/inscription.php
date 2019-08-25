<?php
    function verif_pseudo($bdd, $pseudo){
        $p_verif = strtoupper($pseudo);
        $verif_user = $bdd->prepare("SELECT pseudo AS pseudo FROM RA_DESPRES_personne WHERE UPPER(pseudo)=?");
        $verif_user->execute(array($p_verif));
        return $verif_user->rowCount();
    }
    
    function verif_mail($bdd, $mail){
        $verif_user = $bdd->prepare("SELECT mail FROM RA_DESPRES_personne WHERE mail=?");
        $verif_user->execute(array($mail));
        return $verif_user->rowCount();
    }

    function insert_member($bdd, $pseudo, $mdp, $mail){
        $insert_user = $bdd->prepare("INSERT INTO RA_DESPRES_personne (pseudo,password,mail) VALUE (?,?,?)");
        $insert_user->execute(array($pseudo,$mdp,$mail));
    }
?>