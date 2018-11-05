<?php
    require "/models/accueilModel.php";
    require "/views/accueilView.php";

    $users = get_users(0,10);
    
    echo "Listes des users"; echo "<br/>";
    foreach ($users as $user)
    {
        echo $user['user_login'];
    }
    
    
?>