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
            $requete = $bdd->prepare("
              INSERT INTO employeurs(nom, prenom, date_de_naissance, n_ss, email, telephone, addresse, poste_occupee, date_entree_entreprise, date_sortie_entreprise, departement_ratache, access_departement) VALUES (:nom, :prenom, :naissance, :ss, :email, :tel, :adresse, :poste, :date_entree, :date_sortie, :departement, :access_interface)
                                ");
            $requete->bindValue(":nom",$nom);
            $requete->bindValue(":prenom",$prenom);
            $requete->bindValue(":naissance",$naissance);
            $requete->bindValue(":ss",$ss);
            $requete->bindValue(":email",$email);
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":adresse",$adresse);
            $requete->bindValue(":poste",$poste);
            $requete->bindValue(":date_entree",$date_entree);
            $requete->bindValue(":date_sortie",$date_sortie);
            $requete->bindValue(":departement",$departement);
            $requete->bindValue(":access_interface",$access_interface);

            try
            {
                $requete->execute();
                header('Location: rp');
            }
            catch(PDOException $e)
            {
              ?>
              <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="      crossorigin="anonymous"></script>
              <script src="Toastr/toastr.min.js"></script>
              <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
              <?php
            }
    }

    function edit_rh($id,$nom,$prenom,$naissance,$ss,$email,$tel,$adresse,$poste,$date_entree,$date_sortie,$departement,$access_interface)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE employeurs SET 
                                            nom = :nom,
                                            prenom = :prenom,
                                            date_de_naissance= :naissance,
                                            n_ss = :ss,
                                            email = :email,
                                            telephone = :tel,
                                            addresse = :adresse,
                                            poste_occupee = :poste,
                                            date_entree_entreprise = :date_entree,
                                            date_sortie_entreprise = :date_sortie,
                                            departement_ratache = :departement,
                                            access_departement = :access_departement
                                        WHERE employee_id = :id
                                    ");
            $requete->bindValue(":id",$id);
            $requete->bindValue(":nom",$nom);
            $requete->bindValue(":prenom",$prenom);
            $requete->bindValue(":naissance",$naissance);
            $requete->bindValue(":ss",$ss); 
            $requete->bindValue(":email",$email);
            $requete->bindValue(":tel",$tel); 
            $requete->bindValue(":adresse",$adresse);
            $requete->bindValue(":poste",$poste);
            $requete->bindValue(":date_entree",$date_entree);
            $requete->bindValue(":date_sortie",$date_sortie);
            $requete->bindValue(":departement",$departement);
            $requete->bindValue(":access_departement",$access_interface);

            try
            {
                $requete->execute();
                header('Location: rp');
            }
            catch(PDOException $e)
            {                                             
              ?>
              <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="      crossorigin="anonymous"></script>
              <script src="Toastr/toastr.min.js"></script>
              <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
              <?php
            }
    }

    function delete_emp($id)
    {
      global $bdd;
      $requete = $bdd->prepare( "DELETE FROM employeurs WHERE employee_id = :id");
      $requete->bindParam(':id', $id);

      try {
        $requete->execute();
        header('Location: rp');
      }
      catch(PDOException $e) {
        echo $e->getMessage();
      }

      return $bdd->affected_rows();
    }

?>