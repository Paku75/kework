<?php
    function get_ep()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM ecole_partenaire");
        $requete->execute();
        return $requete->fetchAll();
    }
    $eps = get_ep();
    
    function add_ep($ecole,$specialite,$departement,$nom,$tel,$portable,$email,$calendrier,$historique,$debut_stage,$fin_stage)
    {
            global $bdd;
            $requete = $bdd->prepare("
              INSERT INTO ecole_partenaire(ecole,specialite,departement,nom,tel,portable,email,calendrier,historique,debut_stage,fin_stage) VALUES (:ecole, :specialite, :departement, :nom, :tel, :portable, :email, :calendrier, :historique, :debut_stage, :fin_stage )
                                ");
            $requete->bindValue(":ecole",$ecole);
            $requete->bindValue(":specialite",$specialite);
            $requete->bindValue(":departement",$departement);
            $requete->bindValue(":nom",$nom); 
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":portable",$portable);
            $requete->bindValue(":email",$email);
            $requete->bindValue(":calendrier",$calendrier);
            $requete->bindValue(":historique",$historique);
            $requete->bindValue(":debut_stage",$debut_stage);
            $requete->bindValue(":fin_stage",$fin_stage);
               
            try
            {
                $requete->execute();
                header('Location: ep');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }

    function edit_ep($id,$ecole,$specialite,$departement,$nom,$tel,$portable,$email,$calendrier,$historique,$debut,$fin)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE ecole_partenaire SET 
                                            ecole = :ecole,
                                            specialite = :specialite,
                                            departement= :departement,
                                            nom = :nom,
                                            tel = :tel,
                                            portable = :portable,
                                            email = :email,
                                            calendrier = :calendrier,
                                            historique = :historique,
                                            debut_stage = :debut,
                                            fin_stage = :fin
                                        WHERE id_ep = :id
                                    ");
            $requete->bindValue(":id",$id);
            $requete->bindValue(":ecole",$ecole);
            $requete->bindValue(":specialite",$specialite);
            $requete->bindValue(":departement",$departement);
            $requete->bindValue(":nom",$nom); 
            $requete->bindValue(":tel",$tel);
            $requete->bindValue(":portable",$portable); 
            $requete->bindValue(":email",$email);
            $requete->bindValue(":calendrier",$calendrier);
            $requete->bindValue(":historique",$historique);
            $requete->bindValue(":debut",$debut);
            $requete->bindValue(":fin",$fin);
               
            try
            {
                $requete->execute();
                header('Location: ep');
            }
            catch(PDOException $e) {
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
      <?php }
    }

    function delete_ep($id)
    {
            global $bdd;
            $requete = $bdd->prepare( "DELETE FROM ecole_partenaire WHERE id_ep =:id" );
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
                header('Location: ep');
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