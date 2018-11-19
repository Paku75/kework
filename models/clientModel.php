<?php
	/*
    function get_client($deb, $fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM clients LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }

    $clients = get_client(0, 10);
    */

    function get_client()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM clients");
        $requete->execute();
        return $requete->fetchAll();
    }
 
    $clients = get_client();

    function add_client($entreprise,$effetif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi)
    {
            global $bdd;
            $requete = $bdd->prepare("
              INSERT INTO clients(client_entreprise,client_effectif,client_menu_famille,client_fonction_occupee,client_nom,client_prenom,client_tel,client_email,client_suivi) VALUES (:entreprise, :effectif, :activite, :departement, :nom, :prenom, :tel, :email, :suivi)
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

    function edit_client($id,$entreprise,$effectif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE clients SET 
                                            client_entreprise = :entreprise,
                                            client_effectif = :effectif,
                                            client_menu_famille = :client_menu_famille,
                                            client_fonction_occupee = :client_fonction_occupee,
                                            client_nom = :nom,
                                            client_prenom = :prenom,
                                            client_tel = :tel,
                                            client_email = :email,
                                            client_suivi = :suivi,
                                        WHERE client_id = :id
                                    ");
            $requete->bindValue(":id",$id);
            $requete->bindValue(":entreprise",$entreprise);
            $requete->bindValue(":effectif",$effectif);
            $requete->bindValue(":client_menu_famille",$activite);
            $requete->bindValue(":client_fonction_occupee",$departement);
            $requete->bindValue(":nom",$nom); 
            $requete->bindValue(":prenom",$prenom); 
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":email",$email);
            $requete->bindValue(":suivi",$suivi);
               
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

    function delete_client($id)
    {
            global $bdd;
            $requete = $bdd->prepare( "DELETE FROM clients WHERE client_id =:id" );
            $requete->bindParam(':id', $id);
               
            try
            {
                $requete->execute();
                ?>
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>
               toastr.success('Client deleted successfully!', 'Success', {timeOut: 5000, fadeOut: 1000});
               </script>;
               <?php
                header('Location: client');
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

?>