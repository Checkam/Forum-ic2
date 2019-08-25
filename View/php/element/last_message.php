<div class="py-3 px-3 mt-3 theme_th1">Dernier Message</div>
<?
    require($path['connexion_bdd']);
    $messages=last_message($bdd);
    while($message=$messages->fetch())
        echo '<div class="py-3 px-3 sous_theme_th1 text-truncate">'.$message['texte'].'</div>';
?>
