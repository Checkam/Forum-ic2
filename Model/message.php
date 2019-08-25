<?php
    
    $sujet = htmlspecialchars($_GET['sujet']);
    $page = intval($_GET['page']);
    $sql = "SELECT * FROM RA_DESPRES_message WHERE id_sujet=? ORDER BY date_post LIMIT 10 OFFSET ".strval($page*10-10);
    $messages = $bdd->prepare($sql);
    $messages->execute(array($sujet));
    
    $sql = "SELECT COUNT(*) AS nb_message FROM RA_DESPRES_message WHERE id_sujet=?";
    $nb_message = $bdd->prepare($sql);
    $nb_message->execute(array($sujet));
    $nb_message=$nb_message->fetch();
    

    function get_user($bdd,$message){
        $auteurs= $bdd->prepare("SELECT pseudo FROM RA_DESPRES_personne WHERE id_pers=?");
		$auteurs->execute(array($message['id_auteur']));
        return $auteurs->fetch();
    }

    function affichage_multiple($bdd,$liste,$view,$erreur){
        $element=$liste->fetch();
        $couleur="color:white;";
        if(empty($element)){
            echo $erreur;
       }else{
            do{
                $auteur=get_user($bdd,$element);
                include($view);
            }while($element=$liste->fetch());
        }
    }

?>