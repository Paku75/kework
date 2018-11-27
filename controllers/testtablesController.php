<?php 
    require __DIR__ ."/../models/testtablesModel.php";
    require __DIR__ ."/../views/testtablesView.php";
    //require __DIR__ ."/../views/tablesComptabiliteView.php";

    

    if(isset($_POST['epadd']))
        {
            $ecole = $_POST['ecole'];
            $specialite = $_POST['specialite'];
            $departement = $_POST['departement'];
            $nom= $_POST['nom'];
            $tel = $_POST['tel'];
            $portable = $_POST['portable'];
            $email = $_POST['email'];
            $calendrier = date('Y-m-d', strtotime($_POST['calendrier']));
            $historique = $_POST['historique'];
            $debut_stage = date('Y-m-d', strtotime($_POST['deb']));
            $fin_stage = date('Y-m-d', strtotime($_POST['fin']));
            add_ep($ecole,$specialite,$departement,$nom,$tel,$portable,$email,$calendrier,$historique,$debut_stage,$fin_stage);
        }
    
    if(isset($_POST['epedit']))
        {    
            $id = $_POST['id'];
            $ecole = $_POST['ecole'];
            $specialite = $_POST['specialite'];
            $departement = $_POST['departement'];
            $nom= $_POST['nom'];
            $tel = $_POST['tel'];
            $portable = $_POST['portable'];
            $email = $_POST['email'];
            $calendrier = date('Y-m-d', strtotime($_POST['calendrier']));
            $historique = $_POST['historique'];
            $debut = date('Y-m-d', strtotime($_POST['deb']));
            $fin = date('Y-m-d', strtotime($_POST['fin']));

            edit_ep($id,$ecole,$specialite,$departement,$nom,$tel,$portable,$email,$calendrier,$historique,$debut,$fin);
        } 
    

     
    if(isset($_POST['epdelete']))
    {
        $id = $_POST['id_delete'];
        delete_ep($id);
    }
    
?>