<?php
    if(isset ($_POST['submit']))
        {     
            $user_login = $_POST['username'];
            $user_pass = sha1($_POST['pass']);
            $requete = $bdd->query("SELECT * FROM users WHERE user_login ='$user_login' AND user_pass='$user_pass'"); 
            if($reponse = $requete->fetch()) 
            {
                $_SESSION['connecte'] = true;
                $user_id = $_SESSION['user_id'];
//                $user_login = $_SESSION['user_login'];
//                $user_level = $_SESSION['user_level'];
                $_SESSION['user_login'] = $reponse['user_login'];
                $_SESSION['user_level'] = $reponse['user_level'];
                $_SESSION['user_poste'] = $reponse['user_poste'];

                if($user_level==1)
                {
                    header("Location:accueil");
                }
                else
                { 
                    header("Location:accueil");
                } 
            }
            else
            {
                echo 'Identifiant ou mot de passe incorrect';
            }
        }
?>