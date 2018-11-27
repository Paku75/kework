<?php
    function get_recrutement()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM recrutement");
        $requete->execute();
        return $requete->fetchAll();
    }
    $recrutement = get_recrutement();
    
    function add_recrutement($nom,$prenom,$ecole,$niveau,$date,$duree,$suivi,$portable,$email)
    {
            global $bdd;
            $requete = $bdd->prepare("INSERT INTO recrutement(nom,prenom,ecole,niveau,date_souhaitee,duree,suivi,portable,email)
                                      VALUE(:nom,:prenom,:ecole,:niveau,:date,:duree,:suivi,:portable,:email)
                                    ");
            $requete->bindValue(":nom",$nom); 
            $requete->bindValue(":prenom",$prenom);
            $requete->bindValue(":ecole",$ecole);
            $requete->bindValue(":niveau",$niveau);
            $requete->bindValue(":date",$date);
            $requete->bindValue(":duree",$duree);
            $requete->bindValue(":suivi",$suivi);
            $requete->bindValue(":portable",$portable);
            $requete->bindValue(":email",$email);
               
            try
            {
                $requete->execute();
                header('Location: sr');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>
      <?php }
    }

    function edit_recrutement($id,$nom,$prenom,$ecole,$niveau,$date,$duree,$suivi,$portable,$email)
    {
            global $bdd;
            $requete = $bdd->prepare(" UPDATE recrutement SET 
                                            nom = :nom,
                                            prenom = :prenom,
                                            ecole= :ecole,
                                            niveau = :niveau,
                                            date_souhaitee = :date,
                                            duree = :duree,
                                            suivi = :suivi,
                                            portable = :portable,
                                            email = :email
                                        WHERE id_recrutement = :id
                                    ");
            $requete->bindValue(":id",$id);
            $requete->bindValue(":nom",$nom);
            $requete->bindValue(":prenom",$prenom);
            $requete->bindValue(":ecole",$ecole);
            $requete->bindValue(":niveau",$niveau); 
            $requete->bindValue(":date",$date);
            $requete->bindValue(":duree",$duree); 
            $requete->bindValue(":suivi",$suivi);
            $requete->bindValue(":portable",$portable);
            $requete->bindValue(":email",$email);
               
            try
            {
                $requete->execute();
                header('Location: sr');
            }
            catch(PDOException $e) {
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>
      <?php }
    }

    function delete_recrutement($id)
    {
            global $bdd;
            $requete = $bdd->prepare( "DELETE FROM recrutement WHERE id_recrutement =:id" );
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
                header('Location: sr');
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            ?>
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.error('Error on deleting this partener', 'Error', {timeOut: 5000});</script>
      <?php }
    } 