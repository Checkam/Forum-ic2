<?php
require($path['connexion_bdd']);
$element = get_sujet(htmlspecialchars($_GET['sujet']),$bdd);

$id=$element['id_auteur'];
$auteur = get_auteur($id,$bdd);
$auteur['pseudo']=$auteur['pseudo'];
$couleur="color:red;";
include($path['message_v']);
unset($bdd);
?>
