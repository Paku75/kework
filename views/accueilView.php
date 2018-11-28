
<?php 
    require_once "/../models/loginModel.php";
?>
<div class="accueil">
Bienvenue <p style="font-style: italic;"><?= $_SESSION['user_login']; ?></p> <br>
</div>

<!--<a href="users">Liste des utilisateurs internes (ayant accès au Manager)</a>-->
