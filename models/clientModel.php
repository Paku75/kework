<?php

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
?>