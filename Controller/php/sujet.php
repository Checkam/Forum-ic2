<?php
	include($path['sujet_m']);
	$erreur="Il n'y a pas de sujet";
	$element=$sujets->fetch();
    if(empty($element)){
    	echo $erreur;
    }else{
    	do{
			$auteur=get_user($bdd,$element);
			$nb_reponse=nb_message_by_theme($bdd,$element);
			include($path['sujet_v']);
		}while($element=$sujets->fetch());
    }
	unset($bdd);
?>
