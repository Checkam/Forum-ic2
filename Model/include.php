<?php
$path_absolu="/opt/lampp/htdocs/";
$path_model="Model/";
$path_controller="Controller/";
$path_view="View/";
$path_img="img/";

$php="php/";
$css="css/";

$path['index']='https://forum-ic2.000webhostapp.com';

//Controller
$path['theme_c']=$path_controller.$php."theme.php";
$path['sujet_c']=$path_controller.$php."sujet.php";
$path['message_c']=$path_controller.$php."message.php";
$path['sous_theme_c']=$path_controller.$php."sous_theme.php";
$path['connexion_c']=$path_controller.$php."connexion.php";
$path['inscription_c']=$path_controller.$php."inscription.php";
$path['contenaire_sujet_c']=$path_controller.$php."contenaire_sujet.php";
$path['add_sujet_c']=$path_controller.$php."add_sujet.php";
$path['add_message_c']=$path_controller.$php."add_message.php";
$path['sujet_message_c']=$path_controller.$php."sujet_message.php";
$path['profil_c']=$path_controller.$php."profil.php";

//Model
$path['connexion_m']=$path_model."connexion.php";
$path['connexion_bdd']=$path_model."secure/connexion_bdd.php";
$path['inscription_m']=$path_model."inscription.php";
$path['theme_m']=$path_model."theme.php";
$path['sujet_m']=$path_model."sujet.php";
$path['message_m']=$path_model."message.php";
$path['sous_theme_m']=$path_model."sous_theme.php";
$path['add_sujet_m']=$path_model."add_sujet.php";
$path['add_message_m']=$path_model."add_message.php";
$path['profil_m']=$path_model."profil.php";

//View

$path['style']=$path_view.$css."style.css";
$path['header']=$path_view.$php."header/header.php";
$path['connexion_form']=$path_view.$php."header/connexion_form.php";
$path['inscription_form']=$path_view.$php."header/inscription_form.php";
$path['theme_v']=$path_view.$php."element/theme.php";
$path['sujet_v']=$path_view.$php."element/sujet.php";
$path['message_v']=$path_view.$php."element/message.php";
$path['btn_message_v']=$path_view.$php."element/new_message.php";
$path['form_message_v']=$path_view.$php."form/form_message.php";
$path['sous_theme_v']=$path_view.$php."element/sous_theme.php";
$path['form_sujet_v']=$path_view.$php."form/form_sujet.php";
$path['profil_v']=$path_view.$php."user/profil.php";
$path['right_contenair']=$path_view.$php."layout/rightNav.php";
$path['stats']=$path_view.$php."element/stats.php";
$path['contenaire_sujet_v']=$path_view.$php."page/contenaire_sujet.php";
$path['last_message']=$path_view.$php."element/last_message.php";
$path['footer']=$path_view.$php."footer/footer.php";
$path['pagination_v']=$path_view.$php."element/pagination.php";



//Fonction qui permet de trnasformé un date en texte du style (Il y a 3 minutes,Il y a 2 heures)
function date_texte($texte_date){
    $date_actuelle = new DateTime();
    $date_post = new DateTime($texte_date);
    $interval = $date_post->diff($date_actuelle);
    $days=$interval->d;
    $hours=$interval->h;
    $minutes=$interval->i;
    $secondes=$interval->s;
    if($days)
        echo "Il y a ".$days." jours";
    else if($hours)
        echo "Il y a ".$hours." heures";
    else if($minutes)
        echo "Il y a ".$minutes." minutes";
    else if($secondes)
        echo "Il y a ".$secondes." secondes";
}


function get_sujet($id,$bdd){
    $sujet = $bdd->prepare("SELECT * FROM RA_DESPRES_sujet WHERE id_sujet=?");
    $sujet->execute(array($id));
    return $sujet->fetch();
}

function get_auteur($id,$bdd){
    $auteur = $bdd->prepare("SELECT * FROM RA_DESPRES_personne WHERE id_pers=?");
    $auteur->execute(array($id));
    return $auteur->fetch();
}

function nb_sujet($bdd){
    $sujets = $bdd->prepare("SELECT COUNT(*) AS nb_sujet FROM RA_DESPRES_sujet");
    $sujets->execute();
    $nb_sujets=$sujets->fetch();
    echo $nb_sujets['nb_sujet'];
}

function nb_message($bdd){
    $messages = $bdd->prepare("SELECT COUNT(*) AS nb_message FROM RA_DESPRES_message");
    $messages->execute();
    $nb_messages=$messages->fetch();
    echo $nb_messages['nb_message'];
}


function last_message($bdd){
    $messages = $bdd->prepare("SELECT * FROM RA_DESPRES_message ORDER BY date_post DESC LIMIT 5");
    $messages->execute();
    return $messages;
}


?>
