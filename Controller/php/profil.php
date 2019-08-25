<?php
    require($path['connexion_bdd']);
	require($path['profil_m']);

	$id_user = htmlspecialchars($_GET['profil']);
	
	$profil = get_user_profil($bdd, $id_user);
	if($profil->rowCount()){
		$auteur = $profil->fetch();     //Info Profil
		$privilege = privilege_profil($bdd, $id_user);

		$nombre_msg = nb_msg_profil($bdd, $id_user);
        $nombre_sujet = nb_sujet_profil($bdd, $id_user);

        $sujet = get_sujet_profil($bdd, $id_user);
        $msg = get_msg_profil($bdd, $id_user);
        
        include($path['profil_v']);
        
	}else{
?>
<div class="col d-flex justify-content-center align-items-center h-100">
	<div class="my-5 h4">
		Ce profil n'existe pas
	</div>
</div>
<?php
	}
?>