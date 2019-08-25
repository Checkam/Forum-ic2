<?php
    if(isset($_GET['page'])){
        require($path['connexion_bdd']);
        require($path['message_m']);

        affichage_multiple($bdd,$messages,$path['message_v'],"Il n'y a pas de message");
        unset($bdd);

        echo '<div class="row col-12 justify-content-center ">';
        $nb_page=ceil(intval($nb_message['nb_message'])/10);
        for($num_page=1;$num_page<=$nb_page;$num_page++){
            include($path['pagination_v']);
        }
        echo '</div>';

    }
?>
