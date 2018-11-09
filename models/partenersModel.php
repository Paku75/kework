<?php

    function get_partener($deb, $fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM parteners LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }

    $parteners = get_partener(0, 10);

?>