<?php

    function get_employee($deb,$fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM employeurs LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }
    $employeur = get_employee(0,10);
?>