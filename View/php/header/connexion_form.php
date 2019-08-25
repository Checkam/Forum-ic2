<div class="header_conn_insc" id="connexion" <?php if(isset($_COOKIE['erreur2'])){ echo "style='display:block !important'";} ?>>
    <div class="container d-flex justify-content-center h-100 align-items-center">
        <div id="block_form" class="col-lg-4 col-sm-6 p-4 block_form">
            <div class="text-center mb-4 h5"><strong>Connexion</strong></div>
            <form class="" method="post" action="<?php echo $path['connexion_c'];?>">
                <div class="form-group">
                    <input class="form-control my-2" id="pseudo_c" type="text" name="pseudo" placeholder="Pseudo" value="<?php if(isset($_COOKIE['pseudo2'])){echo $_COOKIE['pseudo2'];} ?>">
                    <input class="form-control my-2" id="mdp_c" type="password" name="password" placeholder="Mot de passe">
                </div>
                <button class="btn btn-outline-light col" type="submit" name="connexion">Se connecter</button>
            </form>
            <?php
                if(isset($_COOKIE['erreur2'])){
                    echo "<div>".$_COOKIE['erreur2']."</div>";
                }
            ?>
        </div>
    </div>
</div>
