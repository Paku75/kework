<?php

    function get_client()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM clients");
        $requete->execute();
        return $requete->fetchAll();
    }

    function getContent($tableName)
    {
    	$description = null;

    	if ($tableName == "Horus")
        {
    		$description = "Ceci est table 1.";
            showTable1($tableName, $description);
        }
    	else if ($tableName == "Kework")
        {
    		$description = "Ceci est table 2.";
            showTable2($tableName, $description);
        }
    	
    }

	function showTable1($tableName, $description)
	{
		include __DIR__ ."/../views/clientTableView.php";
	}
    
    function showTable2($tableName, $description)
    {
        include __DIR__ ."/../views/clientTable2View.php";
    }
    
    function add_client_horus($entreprise,$effectif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi)
    {
            global $bdd;
            $requete = $bdd->prepare("INSERT INTO clients( 
                                                            client_entreprise,
                                                            client_effectif,
                                                            client_menu_famille,
                                                            client_fonction_occupee,
                                                            client_nom,client_prenom,
                                                            client_tel,client_email,
                                                            client_suivi,
                                                            entreprise
                                                         ) 
                                                         
                                                   VALUES(
                                                            :entreprise,
                                                            :effectif,
                                                            :activite,
                                                            :departement,
                                                            :nom,
                                                            :prenom,
                                                            :tel,
                                                            :email,
                                                            :suivi,
                                                            'Horus'
                                                         )
                                    ");
            $requete->bindValue(":entreprise",$entreprise);
            $requete->bindValue(":effectif",$effectif);
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
    
    function add_client_kework($entreprise,$effectif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi)
    {
            global $bdd;
            $requete = $bdd->prepare("INSERT INTO clients( 
                                                            client_entreprise,
                                                            client_effectif,
                                                            client_menu_famille,
                                                            client_fonction_occupee,
                                                            client_nom,client_prenom,
                                                            client_tel,client_email,
                                                            client_suivi,
                                                            entreprise
                                                         ) 
                                                         
                                                   VALUES(
                                                            :entreprise,
                                                            :effectif,
                                                            :activite,
                                                            :departement,
                                                            :nom,
                                                            :prenom,
                                                            :tel,
                                                            :email,
                                                            :suivi,
                                                            'Kework'
                                                         )
                                    ");
            $requete->bindValue(":entreprise",$entreprise);
            $requete->bindValue(":effectif",$effectif);
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


    function edit_detail_client($id,$nom,$prenom,$tel,$email,$date,$historique)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE clients SET 
                                            client_nom = :nom,
                                            client_prenom = :prenom,
                                            client_tel = :tel,
                                            client_email = :email,
                                            client_date = :date,
                                            client_historique = :historique
                                        WHERE client_id = :id
                                    ");
            $requete->bindValue(":id",$id);
            $requete->bindValue(":nom",$nom);
            $requete->bindValue(":prenom",$prenom);
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":email",$email);
            $requete->bindValue(":date",$date);
            $requete->bindValue(":historique",$historique);
        
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
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>
      <?php }
    }

    function edit_client($id,$entreprise,$effectif,$activite,$departement,$suivi)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE clients SET 
                                            client_entreprise = :entreprise,
                                            client_effectif = :effectif,
                                            client_menu_famille = :client_menu_famille,
                                            client_fonction_occupee = :client_fonction_occupee,
                                            client_suivi = :suivi
                                        WHERE client_id = :id
                                    ");
            $requete->bindValue(":id",$id);
            $requete->bindValue(":entreprise",$entreprise);
            $requete->bindValue(":effectif",$effectif);
            $requete->bindValue(":client_menu_famille",$activite);
            $requete->bindValue(":client_fonction_occupee",$departement);
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
    
//    function enlever_barre($service)
    function enlever_barre($str)
    {
        for ($i = 0; $i < strlen($str); ++$i) {
            if (ctype_alpha($str[strlen($str) - 1]) == false) {
            $str = substr($str, 0, -1);
            $i = 0;
            }
        }
    return ($str);
    }

    function edit_services($id,$accueil,$conciergerie,$buisness,$happiness,$cowork)
    {
            global $bdd;
            $requete = $bdd->prepare("UPDATE clients  SET
                                            client_services = :services
                                     WHERE client_id = :id
                                     ");
            $service = "$accueil "."| ";
            $service .= "$conciergerie"."| ";
            $service .= "$buisness"."| ";
            $service .= "$happiness"."| ";
            $service .= "$cowork"."| ";
        
            $service = enlever_barre($service);
        
            $requete->bindValue(":id", $id);
            $requete->bindValue(":services", $service);

            try
            {
                $requete->execute();
            }
            catch(PDOException $e)
            {
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Impossible de modifier les services installés', 'Warning', {timeOut: 5000});</script>;
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