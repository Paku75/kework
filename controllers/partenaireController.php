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
    if(isset($_POST['partenaire_delete']))
    {
        $id = @$partener['partener_id'];

        delete_partenaire($id);
    }
?>