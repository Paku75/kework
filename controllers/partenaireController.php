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

    
?>