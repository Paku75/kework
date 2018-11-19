<?php 
    require __DIR__ ."/../models/partenaireModel.php";
    require __DIR__ ."/../views/partenaireView.php";


    if(isset($_POST['partenaireadd']))
        {
            $entreprise = $_POST['entreprise'];
            $activite = $_POST['activite'];
            $departement = $_POST['departement'];
            $nom= $_POST['nom'];
            $tel = $_POST['tel'];
            $portable = $_POST['portable'];
            $email = $_POST['email'];
            add_partenaire($entreprise,$activite,$departement,$nom,$tel,$portable,$email);
        }
 
    if(isset($_POST['partenaireedit']))
        {    
            $id = $_POST['id_edit'];
            $entreprise = $_POST['entreprise_edit'];
            $activite = $_POST['activite_edit'];
            $departement = $_POST['departement_edit'];
            $nom= $_POST['nom_edit'];
            $tel = $_POST['tel_edit'];
            $portable = $_POST['portable_edit'];
            $email = $_POST['email_edit'];
            $date = $_POST['date_edit'];
            $historique = $_POST['historique_edit'];

            edit_partenaire($id,$entreprise,$activite,$departement,$nom,$tel,$portable,$email,$date,$historique);
        } 
    

     
    if(isset($_POST['partenaire_delete']))
    {
        $id = $_POST['id_delete'];
        delete_partenaire($id);
    }
?>