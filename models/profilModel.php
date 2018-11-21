<?php 
    function get_profil()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM users WHERE user_id = '".$_SESSION['user_id']."' ");
        $requete->execute();
        return $requete->fetchAll();
    }
 
    $profil = get_profil();

?>