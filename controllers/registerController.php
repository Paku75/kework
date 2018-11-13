<?php
    require __DIR__ ."/../models/registerModel.php";

        if(isset ($_POST['submit'])) 
        {    
            if(!empty($_POST['username']) AND !empty($_POST['email1']) AND!empty($_POST['email2']) AND !empty($_POST['pass1']) AND !empty($_POST['pass2']))
            { 
                $user_login = htmlspecialchars($_POST['username']);
                $user_email1 = htmlspecialchars($_POST['email1']);
                $user_email2 = htmlspecialchars($_POST['email2']);
                $user_pass1 = sha1($_POST['pass1']);
                $user_pass2 = sha1($_POST['pass2']);
                $dt = date('Y-m-d H:i:s');
                $user_poste = $_POST['user_poste'];
                
                $loginlength = strlen($user_login);
                if($loginlength <= 255)
                {
                    if ($user_email1 == $user_email2)
                    {
                        if (filter_var($user_email1, FILTER_VALIDATE_EMAIL))
                        {
                            if ($user_pass1 == $user_pass2)
                            {
                                $requete = $bdd->prepare("INSERT INTO users (user_login,user_pass,user_email,user_date_inscription,user_poste) VALUES($user_login,$user_pass1,$user_email1,$dt,$user_poste)");
                                $requete->execute(array($user_login,$user_pass1,$user_email1,$dt,$user_poste));
                            
                                 var_dump($requete);
                                
                                $erreur = "Le compte a bien été crée";
//                                header('Location: admin');
                            } else {
                                $erreur = "Les mots de passes ne correspondent pas";
                            }
                        } else {
                            $erreur = "Format email invalide";
                        }
                    } else {
                        $erreur = "Les emails ne correspondent pas";
                    }
                } else {
                    $erreur = "Le login ne doit pas dépasser 255 caractères";
                }
                
                echo "ok";
            } else {
                $erreur = "Tous les champs doivent être complétés";
            }
        }

    require __DIR__ ."/../views/registerView.php";
?>