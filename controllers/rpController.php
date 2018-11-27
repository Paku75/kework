<?php 
    
    require_once __DIR__ ."/../models/rpModel.php";
    require_once __DIR__ ."/../views/rpView.php";


    if(isset($_POST['rhadd']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $naissance = date('Y-m-d', strtotime($_POST['naissance']));
        $ss= $_POST['ss'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $adresse = $_POST['adresse'];
        $poste = $_POST['poste'];
        $date_entree = date('Y-m-d', strtotime($_POST['date_entree']));
        $date_sortie = date('Y-m-d', strtotime($_POST['date_sortie']));
        $departement = $_POST['departement'];
        $access_interface = $_POST['access_interface'];

        $array = array($nom,$prenom,$naissance,$ss,$email,$tel,$adresse,$poste,$date_entree,$date_sortie,$departement,$access_interface);

        add_rh($nom,$prenom,$naissance,$ss,$email,$tel,$adresse,$poste,$date_entree,$date_sortie,$departement,$access_interface);
    }
    
    if(isset($_POST['rhedit']))
        {    
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $naissance = $_POST['naissance'];
            $ss= $_POST['ss'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
            $adresse = $_POST['adresse'];
            $poste = $_POST['poste'];
            $date_entree = $_POST['entree'];
            $date_sortie = $_POST['sortie'];
            $departement = $_POST['departement'];
            $access_interface = $_POST['access'];

            edit_rh($id,$nom,$prenom,$naissance,$ss,$email,$tel,$adresse,$poste,$date_entree,$date_sortie,$departement,$access_interface);
        } 
    

     
    if(isset($_POST['rh_delete']))
    {
        $id = $_POST['id_delete'];
        delete_emp($id);
    }
?>