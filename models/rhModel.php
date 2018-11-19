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
              INSERT INTO employeurs(nom, prenom, date_de_naissance, n_ss, email, telephone, addresse, poste_occupee, date_entree_entreprise, date_sortie_entreprise, departement_ratache, access_departement, user_id) VALUES (:nom, :prenom, :naissance, :ss, :email, :tel, :adresse, :poste, :date_entree, :date_sortie, :departement, :access_interface, 99999)
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
                header('Location: rh');
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
    function delete_id($id)
    {
      $query = $bdd->prepare( "DELETE FROM employeurs WHERE employee_id = :id");
      $query->bindParam(':id', $id);

      try {
        $requete->execute();
      }
      catch(PDOException $e) {
        echo $e->getMessage();
      }

      return $bdd->affected_rows();
    }

?>