<?php

    function get_contrat()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM contrat");
        $requete->execute();
        return $requete->fetchAll();
    }
    $contrats = get_contrat();


    function add_contrat($nom,$date_contrat)
    {
            global $bdd;
            $requete = $bdd->prepare("INSERT INTO contrat(nom_contrat,date_contrat) VALUES (:nom,:date_contrat)");
            $requete->bindValue(":nom",$nom);
            $requete->bindValue(":date_contrat",$date_contrat);
               
            try
            {
                $requete->execute();
                header('Location: contrat');
            }
            catch(PDOException $e)
            {   
            ?> 
               <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
               <script src="Toastr/toastr.min.js"></script>
               <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>
      <?php }
    }


    function delete_contrat($id)
    {
            global $bdd;
            $requete = $bdd->prepare( "DELETE FROM contrat WHERE id_contrat =:id" );
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
                header('Location: contrat');
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