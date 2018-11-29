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
        $prestataire = $_POST['prestataire'];
        $coutMois = $_POST['cout_mois'];
        $tauxTva = $_POST['taux_tva'];
        $annivContrat = $_POST['anniv_contrat'];
        $historique = $_POST['historique'];
        $contentieux = $_POST['contentieux'];

        addCharge($idFonction, $prestataire, $coutMois, $tauxTva, $annivContrat, $historique, $contentieux);
    }

    if (isset($_POST['idCategorie']))
    {
        $id = $_POST['idCategorie'];
        $fonctions = getFonctionsByCategoryId($id);

        echo "<div id='response'>";
        if ($id == 0) {
            echo "<option>Sélectionner une fonction</option>";
        } else {
            foreach ($fonctions as $fonction) {
                $idFonction = $fonction['id_fonction'];
                $nomFonction = $fonction['nom_fonction'];
                echo "<option value='$idFonction'>$nomFonction</option>";
            }
        }
        echo "</div>";
    }
?>