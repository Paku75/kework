<?php 
    
    require_once __DIR__ ."/../models/rhModel.php";
    require_once __DIR__ ."/../views/rhView.php";


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
    
    
?>