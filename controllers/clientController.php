<?php 
    require __DIR__ ."/../models/clientModel.php";
    require __DIR__ ."/../views/clientView.php";

    
//    if(isset($_GET['client_id']))
//    {
//        $id = $_GET['client_id'];
//        $services = get_contrat_service($id);
//    } else 
//        {
//            file_put_contents("test123.php","");
//        }
    
    if(isset($_POST['clientadd']))
    {
        $entreprise = $_POST['entreprise'];
        $effectif = $_POST['effectif'];
        $activite = $_POST['activite'];
        $departement = $_POST['departement'];
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $suivi = $_POST['suivi'];
        
        add_client($entreprise,$effectif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi);
    }
    if(isset($_POST['clientedit']))
    {
        $id = $_POST['client_id'];
        $entreprise = $_POST['entreprise'];
        $effectif = $_POST['effectif'];
        $activite = $_POST['activite'];
        $departement = $_POST['departement'];
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $suivi = $_POST['suivi'];
        
        
        
            $accueil = $_POST['accueil'];
            $conciergerie = $_POST['conciergerie'];
            $buisness = $_POST['buisness'];
            $happiness = $_POST['happiness'];
            $cowork = $_POST['cowork'];
            edit_services($id,$accueil,$conciergerie,$buisness,$happiness,$cowork);
        
        
        edit_client($id,$entreprise,$effectif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi);
        
    }
    
     
    if (isset($_POST['client_delete']))
    {
        $id = $_POST['id_delete'];
        delete_client($id);
    }
?>