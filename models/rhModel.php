<?php

    function get_employee($deb,$fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM employeurs LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }

    function get_users($deb,$fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM users LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }

    $employeur = get_employee(0,10);
    $users = get_users(0,10);


    function add_rh($nom,$prenom,$naissance,$ss,$email,$tel,$adresse,$poste,$date_entree,$date_sortie,$departement,$access_interface)
    {
            global $bdd;
            $requete = $bdd->prepare("INSERT INTO employeurs     
                                    (
                                      nom,
                                      prenom,
                                      date_de_naissance,
                                      n_ss,
                                      email,
                                      telephone,
                                      addresse,
                                      poste_occupee,
                                      date_entree_entreprise,
                                      date_sortie_entreprise,
                                      departement_ratache,
                                      access_departement
                                    )
	                               VALUES 
                                    (
                                      :nom,
                                      :prenom,
                                      :naissance,
                                      :ss,
                                      :email,
                                      :tel,
                                      :adresse,
                                      :poste,
                                      :date_entree,
                                      :date_sortie,
                                      :departement,
                                      :access_interface,
                                    )
                                ");
            $requete->bindValue(":nom",$nom,PDO::PARAM_STR);
            $requete->bindValue(":prenom",$prenom,PDO::PARAM_STR);
            $requete->bindValue(":naissance",$naissance,PDO::PARAM_STR);
            $requete->bindValue(":ss",$ss,PDO::PARAM_STR);
            $requete->bindValue(":email",$email,PDO::PARAM_STR);
            $requete->bindValue(":tel",$tel,PDO::PARAM_STR);
            $requete->bindValue(":adresse",$adresse,PDO::PARAM_STR);
            $requete->bindValue(":poste",$poste,PDO::PARAM_STR);
            $requete->bindValue(":date_entree",$date_entree,PDO::PARAM_STR);
            $requete->bindValue(":date_sortie",$date_sortie,PDO::PARAM_STR);
            $requete->bindValue(":departement",$departement,PDO::PARAM_STR);
            $requete->bindValue(":access_interface",$access_interface,PDO::PARAM_INT);
            $requete->execute();
    }

?>