<?php
    require __DIR__ ."/../models/loginModel.php";

    if(isset ($_POST['submit']))
        {     
            $user_login = $_POST['username'];
            $user_pass = sha1($_POST['pass']);
            $requete = $bdd->query("SELECT * FROM users WHERE user_login ='$user_login' AND user_pass='$user_pass'"); 
            if($reponse = $requete->fetch()) 
            {
                $_SESSION['connecte'] = true;
                $user_id = $reponse['user_id'];
                $user_login = $reponse['user_login'];
                $user_level = $reponse['user_level'];
                

                if($user_level==1)
                {
                    header("Location:admin");
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

    require __DIR__ ."/../views/loginView.php";