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
//                header('Location: partenaire');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }

    function edit_partenaire($entreprise,$activite,$departement,$nom,$tel,$portable,$email,$date,$historique)
    {
            global $bdd;
            exit();
            $requete = $bdd->prepare(" UPDATE parteners SET 
                                            partener_entreprise = :entreprise,
                                            partener_activite = :activite,
                                            partener_departement_soucripteur= :departement,
                                            partener_nom = :nom,
                                            partener_tel = :tel,
                                            partener_portable = :portable,
                                            partener_email = :email,
                                            partener_date = :date,
                                            partener_historique = :historique
                                    ");
            $requete->bindValue(":entreprise",$entreprise);
            $requete->bindValue(":activite",$effetif);
            $requete->bindValue(":departement",$activite);
            $requete->bindValue(":departement",$departement);
            $requete->bindValue(":nom",$nom); 
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":portable",$prenom); 
            $requete->bindValue(":email",$email);
            $requete->bindValue(":date",$date);
            $requete->bindValue(":historique",$historique);
               
            try
            {
                $requete->execute();
//                header('Location: partenaire');
                echo ("sfqs");
                var_dump($requete);
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }