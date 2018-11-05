<?php
    function login()
    {
        global $bdd;
        $requete = $bdd->query("SELECT * FROM user WHERE user_login ='$user_login' AND user_pass='$user_pass'"); 
        return true;
    }

?>
