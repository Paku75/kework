<?php
    require "/models/loginModel.php";

    if(isset ($_POST['submit']))
        {   
            
            
            $login = $_POST['login'];
            $mdp = sha1($_POST['pass']);
            if(login() == true) 
            {
                $_SESSION['connecte'] = true;
                $user_id = $reponse['user_id'];
                $user_login = $reponse['user_login'];
                $user_level = $reponse['user_level'];
                

                if($user_level==1)
                {
                    header("Location:adminView.php");   
                }
                else
                { 
                    header("Location:accueil");
                } 
            }
            else
            {
                var_dump($requete);
                echo 'Identifiant ou mot de passe incorrect';
            }
        }

    require "/views/loginView.php";