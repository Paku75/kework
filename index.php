<?php
session_start();

//connexion bdd
try
{
    $bdd = new PDO ("mysql:host=localhost;dbname=manager","root","");
}
catch(Exeption $e)
{
    die("bdd non trouvée");
}


//Routeur
if(!isset($_GET['p']))
{   
    if(isset($_SESSION['connecte'])){
        $page = "admin";
    } else {
        $page = "accueil";
    }
	
}

else
{
	if(!file_exists("controllers/".$_GET['p']."Controller.php"))
		$page = "404";
	else
	    $page = $_GET['p'];
}
    ob_start();//permet de suspendre l'affichage
	   include "controllers/".$page."Controller.php";
	   $content = ob_get_contents();
	ob_end_clean();
	
	include "layout.php";
?>