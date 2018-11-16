<?php
    function get_partener()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM parteners");
        $requete->execute();
        return $requete->fetchAll();
    }
    $parteners = get_partener();
    
    function add_partenaire($entreprise,$activite,$departement,$nom,$tel,$portable,$email)
    {
            global $bdd;
            $requete = $bdd->prepare("
              INSERT INTO parteners(partener_entreprise,partener_activite,partener_departement_soucripteur,partener_nom,partener_tel,partener_portable,partener_email) VALUES (:entreprise, :activite, :departement, :nom, :tel, :portable, :email)
                                ");
            $requete->bindValue(":entreprise",$entreprise);
            $requete->bindValue(":activite",$activite);
            $requete->bindValue(":departement",$departement);
            $requete->bindValue(":nom",$nom); 
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":portable",$portable);
            $requete->bindValue(":email",$email);
               
            try
            {
                $requete->execute();
                header('Location: partenaire');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }

    function edit_client($entreprise,$effetif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi,$date,$historique,$service)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE clients SET 
                                            client_entreprise = :entreprise,
                                            client_effectif = :effectif,
                                            client_menu_famille = :activite,
                                            client_fonction_occupee = :departement,
                                            client_nom = :nom,
                                            client_prenom = :prenom,
                                            client_tel = :tel,
                                            client_email = :email,
                                            client_suivi = :suivi,
                                            client_date = :date,
                                            client_historique = :historique,
                                            client_services = :service
                                    ");
            $requete->bindValue(":entreprise",$entreprise);
            $requete->bindValue(":effectif",$effetif);
            $requete->bindValue(":activite",$activite);
            $requete->bindValue(":departement",$departement);
            $requete->bindValue(":nom",$nom); 
            $requete->bindValue(":prenom",$prenom); 
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":email",$email);
            $requete->bindValue(":suivi",$suivi);
            $requete->bindValue(":date",$date);
            $requete->bindValue(":historique",$historique);
            $requete->bindValue(":service",$service);
               
            try
            {
                $requete->execute();
                header('Location: client');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }


    function delete_partenaire($id)
    {
            global $bdd;
            $requete = $bdd->prepare( "DELETE FROM parteners WHERE partener_id =:id" );
            $requete->bindParam(':id', $id);
               
            try
            {
                $requete->execute();
                ?>
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>
               toastr.success('Partener deleted successfully!', 'Success', {timeOut: 5000, fadeOut: 1000});
               </script>;
               <?php
                header('Location: partenaire');
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            ?>
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.error('Error on deleting this partener', 'Error', {timeOut: 5000});</script>;
      <?php }
    }