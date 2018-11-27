<?php 
    require __DIR__ ."/../models/comptabiliteModel.php";
    require __DIR__ ."/../views/comptabiliteView.php";
    //require __DIR__ ."/../views/tablesComptabiliteView.php";

    function getContent($companyName)
    {
    	$description = null;

    	if ($companyName == "Horus")
    		$description = "Horus is the first company located in center of Paris.";
    	else if ($companyName == "Kework")
    		$description = "Kework is a startup located in Aubervilliers.";

    	showTables($companyName, $description);
    }

    if (isset($_POST['categorie_add_submit']))
    {
        $catEntreprise = $_POST['cat_entreprise'];
        $nomCategorie = $_POST['nom_categorie'];

        addCategorie($nomCategorie, $catEntreprise);
    }

    if (isset($_POST['fonction_add_submit']))
    {
        $nomFonction = $_POST['nom_fonction'];
        $idCategorie = $_POST['id_categorie'];

        addFonction($nomFonction, $idCategorie);
    }

    if (isset($_POST['charge_add_submit']))
    {
        $idFonction = $_POST['id_fonction'];
        $entreprise = $_POST['entreprise'];
        $prestataire = $_POST['prestataire'];
        $coutMois = $_POST['cout_mois'];
        $tauxTva = $_POST['taux_tva'];
        $annivContrat = $_POST['anniv_contrat'];
        $historique = $_POST['historique'];
        $contentieux = $_POST['contentieux'];

        addCharge($idFonction, $entreprise, $prestataire, $coutMois, $tauxTva, $annivContrat, $historique, $contentieux);
    }
?>