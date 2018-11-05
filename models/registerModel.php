 <?php 
    function inscription()
    {
        global $bdd;
        $requete = $bdd->query("INSERT INTO users (email,login,mdp) VALUES('$email','$login','$mdp')");
        header("Location:login.php");
    }

?>