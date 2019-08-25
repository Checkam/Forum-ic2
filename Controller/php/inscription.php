<?php
    $racine = "../../";
    require($racine."Model/include.php");
    require($racine.$path['inscription_m']);
    if(isset($_POST['inscription'])){
        require($racine.$path['connexion_bdd']);
        session_start();
        if(!empty($_POST['pseudo']) AND !empty($_POST['mdp2']) AND !empty($_POST['mdp2']) AND !empty($_POST['mail']) AND !empty($_POST['mail2'])){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mail = htmlspecialchars($_POST['mail']);
            $mail2 = htmlspecialchars($_POST['mail2']);
            $mdp = hash('sha256',$_POST['mdp']);
            $mdp2 = hash('sha256',$_POST['mdp2']);

            $temps_c = time() + 600; //Temps en secondes
            setcookie("pseudo", $pseudo, $temps_c, "/");
            setcookie("mail", $mail, $temps_c, "/");
            setcookie("mail2", $mail2, $temps_c, "/");


            if(strlen($pseudo) <= 50){       
                if(verif_pseudo($bdd, $pseudo) == 0){
                    if($mail == $mail2){
                        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){   //Verifie le format du mail
                            if(verif_mail($bdd, $mail) == 0){
                                if($mdp == $mdp2){
                                            insert_member($bdd, $pseudo, $mdp, $mail);

                                            setcookie("pseudo", "", time() - 3600);
                                            setcookie("mail", "", time() - 3600);
                                            setcookie("mail2", "", time() - 3600);
                                            setcookie("erreur", "", time() - 3600);
                                }else{
                                    setcookie("erreur", "Vos de passe ne sont pas identiques", $temps_c, "/");
                                }
                            }else{
                                setcookie("erreur", "Adresse mail déjà utilisé", $temps_c, "/");
                                setcookie("mail", "", time() - 3600);
                                setcookie("mail2", "", time() - 3600);
                            }
                        }else{
                            setcookie("erreur", "Le format de l'adresse mail n'est pas bon", $temps_c, "/");
                            setcookie("mail", "", time() - 3600);
                            setcookie("mail2", "", time() - 3600);
                        }
                    }else{
                        setcookie("erreur", "Vos adresses mails ne sont pas identiques", $temps_c, "/");
                        setcookie("mail", "", time() - 3600);
                        setcookie("mail2", "", time() - 3600);
                    }
                }else{
                    setcookie("erreur", "Pseudo déjà utilisé", $temps_c, "/");
                    setcookie("pseudo", "", time() - 3600);
                }
            }else{
                setcookie("erreur", "Votre pseudo dépasse 50 caractères", $temps_c, "/");
                setcookie("pseudo", "", time() - 3600);
            }
        }else{
            setcookie("erreur", "Tous les champs ne sont pas complétés", $temps_c, "/");
        }
        unset($bdd);
    }
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>
