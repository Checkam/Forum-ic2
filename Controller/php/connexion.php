<?php
    $racine = "../../";
    require($racine."Model/include.php");
    if(isset($_POST['connexion'])){
        require($racine.$path['connexion_bdd']);
        session_start();
        if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $password = hash('sha256', $_POST['password']);

            setcookie("pseudo2", $pseudo, time() + 600, "/");

            require($racine.$path['connexion_m']);

            if($requete->rowCount() == 1){
                $tab = $requete->fetch();
                $_SESSION['id_user'] = $tab['id_pers'];
                
                setcookie("pseudo2", "", time() - 3600);
                setcookie("erreur2", "", time() - 3600);
            }else{
                setcookie("erreur2", "Le mot de passe et le pseudo ne correspondent pas", time() + 600, "/");
            }
        }else{
            setcookie("erreur2", "Tous les champs ne sont pas complétés", time() + 600, "/");
        }
    }
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>