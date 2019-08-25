<div class="header_conn_insc" id="inscription" <?php if(isset($_COOKIE['erreur'])){ echo "style='display:block !important'";} ?>>
    <div class="container d-flex justify-content-center h-100 align-items-center">
        <div id="block_form" class="col-lg-4 col-sm-6 p-4 block_form">
            <div class="text-center mb-4 h5"><strong>Inscription</strong></div>
            <form class="" method="post" action="<?php echo $path['inscription_c'];?>">
                <div class="form-group">
                    <input class="form-control my-2" id="pseudo_i" type="text" placeholder="Pseudo" name="pseudo" value="<?php if(isset($_COOKIE['pseudo'])){echo $_COOKIE['pseudo'];} ?>">
                    <input class="form-control my-2" id="mdp_i" type="password" placeholder="Mot de passe" name="mdp">
                    <input class="form-control my-2" id="mdp2_i" type="password" placeholder="Confirmation Mot de passe" name="mdp2">
                    <input class="form-control my-2" id="mail_i" type="mail" placeholder="Email" name="mail" value="<?php if(isset($_COOKIE['mail'])){echo $_COOKIE['mail'];} ?>">
                    <input class="form-control my-2" id="mail2_i" type="mail" placeholder="Confirmation de l'email" name="mail2" value="<?php if(isset($_COOKIE['mail2'])){echo $_COOKIE['mail2'];} ?>">
                    <!--<div class="g-recaptcha" data-sitekey="6LcAonwUAAAAAHzO2uGT3l3WF-hfzQ0yFTmdHuuV"></div>-->
                </div>
                <button class="btn btn-outline-light col" type="submit" name="inscription">S'inscrire</button>
            </form>
            <?php
                if(isset($_COOKIE['erreur'])){
                    echo "<div>".$_COOKIE['erreur']."</div>";
                }
            ?>
        </div>
    </div>
</div>
