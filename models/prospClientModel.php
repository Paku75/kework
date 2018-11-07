<?php

    function get_client($deb, $fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM clients LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }

    $clients = get_client(0, 10);

?>