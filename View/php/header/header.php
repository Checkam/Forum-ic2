<?php
    if(isset($_POST['deconnexion'])){
        unset($_SESSION['id_user']);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
?>
<!--<img class="img-header col-lg-12" src="<? echo $path_img; ?>code.png" />-->
    
<div class="row flex-row-reverse justify-content-between header_th1 py-3 col-xs-11 col-lg-10 ">
    <?php
        if(isset($_SESSION['id_user'])){
    ?>
    <div class="d-flex flex-row-reverse">
        <form method="post" action="">
            <button class="btn btn-outline-light" type="submit" name="deconnexion">
                <div class="fas fa-power-off"></div>
            </button>
        </form>
        <a class="btn btn-outline-light mx-1" href="https://www.forum-ic2.ovh/?profil=<?echo $_SESSION['id_user'];?>">
            <div class="fas fa-user"></div>
        </a>
    </div>
    <?php
        }else{
    ?>
    <div class="">
        <button class="btn btn-outline-light mr-1" id="inscri_btn">S'inscrire</button>
        <button class="btn btn-outline-light" id="connect_btn">Connexion</button>
    </div>
    <? 	   
        }
    ?>
    <div class="">
        <a class="btn btn-outline-light" href="<? echo $_SERVER['HTTP_REFERER']; ?>">
            <div class="fas fa-arrow-left"></div>
        </a>
        <a class="btn btn-outline-light" href="https://www.forum-ic2.ovh">
            <div class="fas fa-home"></div>
        </a>
    </div>
</div>
<?php
    if(!isset($_SESSION['id_user'])){
        include($path['connexion_form']);
        include($path['inscription_form']);
    }
?>
