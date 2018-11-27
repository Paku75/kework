<?php 
    
    require_once __DIR__ ."/../models/srModel.php";
    require_once __DIR__ ."/../views/srView.php";


    if(isset($_POST['sradd']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $ecole = $_POST['ecole'];
        $niveau = $_POST['niveau'];
        $date = date('Y-m-d', strtotime($_POST['date_souhaitee']));
        $duree = $_POST['duree'];
        $suivi = $_POST['suivi'];
        $portable = $_POST['portable'];
        $email = $_POST['email'];

        add_recrutement($nom, $prenom,$ecole,$niveau,$date,$duree,$suivi,$portable,$email);
    }
    
    if(isset($_POST['sredit']))
    {    
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $ecole = $_POST['ecole'];
        $niveau = $_POST['niveau'];
        $date = date('Y-m-d', strtotime($_POST['date_souhaitee']));
        $duree = $_POST['duree'];
        $suivi = $_POST['suivi'];
        $portable = $_POST['portable'];
        $email = $_POST['email'];

        edit_recrutement($id,$nom,$prenom,$ecole,$niveau,$date,$duree,$suivi,$portable,$email);
    } 
    

     
    if(isset($_POST['srdelete']))
    {
        $id = $_POST['id_delete'];
        delete_recrutement($id);
    }
?>