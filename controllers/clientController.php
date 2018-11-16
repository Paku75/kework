<?php 
    require __DIR__ ."/../models/clientModel.php";
    require __DIR__ ."/../views/clientView.php";

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

            add_client($entreprise,$effetif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi);
        }
     else if(isset($_POST['clientedit']))
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
            $date = $_POST['date'];
            $historique = $_POST['historique'];
            $service = $_POST['service'];

            edit_client($entreprise,$effetif,$activite,$departement,$nom,$prenom,$tel,$email,$suivi,$date,$historique,$service);
        }
?>