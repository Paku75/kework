<?php
session_start();

//connexion bdd
require ('config.php');
try
{
	// local
    //$bdd = new PDO ("mysql:host=$host;dbname=$dbname",$user,$mdp);
    $bdd = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['pass']);

    // online
    //$bdd = new PDO('mysql:host='.$config['host'].';port='.$config['port'].';dbname='.$config['dbname'], $config['user'], $config['pass'], $pdo_options);

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exeption $e)
{
    die("bdd non trouvée");
}


//Routeur
/*
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
    ob_start();
    //permet de suspendre l'affichage
	   include "controllers/".$page."Controller.php";
	   $content = ob_get_contents();
	ob_end_clean();
	
	include "layout.php";
*/

//Routeur
if(!isset($_GET['p']))
{
    if(isset($_SESSION['connecte'])){
        $page = "accueil";
    } else {
        $page = "login";
    }
	
}

else
{
	if(!file_exists("controllers/".$_GET['p']."Controller.php"))
		$page = "404";
	else if(!isset($_SESSION['connecte']))
        $page = "login" ;
    else
	    $page = $_GET['p'];
}
    ob_start();
    //permet de suspendre l'affichage
	   include "controllers/".$page."Controller.php";
	   $content = ob_get_contents();
	ob_end_clean();
	
	include "layout.php";
?>