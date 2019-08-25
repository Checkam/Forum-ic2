<?php  
    include("../../Model/include.php");
    $racine = "../../";
    if(isset($_POST['submit'])){


        if(str_word_count($_POST['texte'])){
            if(strlen($_POST['texte'])<2000){
                $texte = htmlspecialchars($_POST['texte']);
                include($racine.$path['add_message_m']);
            }
        }
    }
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>
