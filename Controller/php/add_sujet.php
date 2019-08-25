<?  
    include("../../Model/include.php");
    $racine = "../../";
    if(isset($_POST['submit'])){
       
        if(str_word_count($_POST['titre']) && str_word_count($_POST['texte'])){
            if(strlen($_POST['titre'])<2000 && strlen($_POST['texte'])<2000){
                $titre = htmlspecialchars($_POST['titre']);
                $texte = htmlspecialchars($_POST['texte']);
                include($racine.$path['add_sujet_m']);
            }    
        }
    }
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>