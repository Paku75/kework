<?php
    function getCategoriesByCompanyName($companyName)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM categories WHERE cat_entreprise = :companyName");
        $requete->bindValue(":companyName", $companyName);
        $requete->execute();
        return $requete->fetchAll();
    }

    function getFonctions()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM fonctions");
        $requete->execute();
        return $requete->fetchAll();
    }

    function getFonctionsByCategoryId($categoryId)
    {
        global $bdd;

        $requete = $bdd->prepare("SELECT * FROM fonctions WHERE id_categorie = :categoryId");

        $requete->bindValue(":categoryId", $categoryId);
        $requete->execute();

        return $requete->fetchAll();
    }

    function getCharges($companyName)
    {
        global $bdd;
        
        // $requete = $bdd->prepare("SELECT * FROM charges WHERE entreprise = :companyName");
        $requete = $bdd->prepare("SELECT ch.*, f.nom_fonction AS nom_fonction, cat.nom_categorie AS nom_categorie
        	FROM charges ch
        	INNER JOIN fonctions f ON ch.id_fonction = f.id_fonction
        	INNER JOIN categories cat ON f.id_categorie = cat.id_categorie
        	WHERE entreprise = :companyName");

        $requete->bindValue(":companyName", $companyName);
        $requete->execute();

        return $requete->fetchAll();
    }

    function getChargesByCategorie($categoryName)
    {
        global $bdd;
        
        // $requete = $bdd->prepare("SELECT * FROM charges WHERE entreprise = :companyName");
        $requeteCalc = $bdd->prepare("UPDATE charges SET cout_annee = cout_mois * 12, tva = taux_tva / 100 * cout_mois, ttc = cout_mois + tva");
        $requeteCalc->execute();
        $requete = $bdd->prepare("SELECT ch.*, f.nom_fonction AS nom_fonction, cat.nom_categorie AS nom_categorie
        	FROM charges ch
        	INNER JOIN fonctions f ON ch.id_fonction = f.id_fonction
        	INNER JOIN categories cat ON f.id_categorie = cat.id_categorie
        	WHERE nom_categorie = :categorie");

        $requete->bindValue(":categorie", $categoryName);
        $requete->execute();

        return $requete->fetchAll();
    }

    function getChargesByIdFonction($idFonction)
    {
        global $bdd;

        $requete = $bdd->prepare("SELECT * FROM charges WHERE id_fonction = :idFonction");

        $requete->bindValue(":idFonction", $idFonction);
        $requete->execute();

        return $requete->fetchAll();
    }

    //$fonctions = getFonctions();
    // $charges = get_charges();

	function showTables($companyName, $description)
	{
        $categories = getCategoriesByCompanyName($companyName);

		include __DIR__ ."/../views/tablesComptabiliteView.php";
	}

    function addCategorie($nomCategorie, $entreprise)
    {
        global $bdd;
        $requete = $bdd->prepare("INSERT INTO categories(nom_categorie, cat_entreprise) VALUES (:nomCategorie, :entreprise)");
        $requete->bindValue(":nomCategorie", $nomCategorie);
        $requete->bindValue(":entreprise", $entreprise);

        try
        {
            $requete->execute();
            header('Location: comptabilite');
        }
        catch(PDOException $e)
        {   
        ?> 
           <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
           <script src="Toastr/toastr.min.js"></script>
           <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
        <?php }
    }

    function addFonction($nomFonction, $idCategorie)
    {
        global $bdd;
        $requete = $bdd->prepare("INSERT INTO fonctions(nom_fonction, id_categorie) VALUES (:nomFonction, :idCategorie)");
        $requete->bindValue(":nomFonction", $nomFonction);
        $requete->bindValue(":idCategorie", $idCategorie);

        try
        {
            $requete->execute();
            header('Location: comptabilite');
        }
        catch(PDOException $e)
        {
        ?> 
           <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
           <script src="Toastr/toastr.min.js"></script>
           <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
        <?php }
    }

    function addCharge($idFonction, $prestataire, $coutMois, $tauxTva, $annivContrat, $historique, $contentieux)
    {
        global $bdd;

        $coutAnnee = $coutMois * 12;
        $tva = $tauxTva / 100 * $coutMois;
        $ttc = $coutMois + $tva;

        $requete = $bdd->prepare("INSERT INTO charges(id_fonction, prestataire, cout_mois, cout_annee, taux_tva, tva, ttc, anniv_contrat, historique, contentieux)
            VALUES(:idFonction, :prestataire, :coutMois, :coutAnnee, :tauxTva, :tva, :ttc, :annivContrat, :historique, :contentieux)");

        $requete->bindValue(":idFonction", $idFonction);
        $requete->bindValue(":prestataire", $prestataire);
        $requete->bindValue(":coutMois", $coutMois);
        $requete->bindValue(":coutAnnee", $coutAnnee);
        $requete->bindValue(":tauxTva", $tauxTva);
        $requete->bindValue(":tva", $tva);
        $requete->bindValue(":ttc", $ttc);
        $requete->bindValue(":annivContrat", $annivContrat);
        $requete->bindValue(":historique", $historique);
        $requete->bindValue(":contentieux", $contentieux);

        try
        {
            // echo "<b><br>idFonction = ". $idFonction ."<br>";
            // echo "prestataire = ". $prestataire ."<br>";
            // echo "coutMois = ". $coutMois ."<br>";
            // echo "coutAnnee = ". $coutAnnee ."<br>";
            // echo "tauxTva = ". $tauxTva ."<br>";
            // echo "tva = ". $tva ."<br>";
            // echo "ttc = ". $ttc ."<br>";
            // echo "annivContrat = ". $annivContrat ."<br>";
            // echo "historique = ". $historique ."<br>";
            // echo "contentieux = ". $contentieux ."<br><br></b>";
            $requete->execute();
            header('Location: comptabilite');
        }
        catch(PDOException $e)
        {
            //echo json_encode($e);
        ?>
           <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
           <script src="Toastr/toastr.min.js"></script>
           <script>toastr.error("<br>La fonction que vous avez choisi a déjà son charge!<br><br>Créées une nouvelle fonction!", 'Error', {timeOut: 5000});</script>;
        <?php }
    }

    function getEntrepriseOfThisCharge($chargeId)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT cat.cat_entreprise AS nom_entreprise
            FROM charges ch
            INNER JOIN fonctions f ON ch.id_fonction = f.id_fonction
            INNER JOIN categories cat ON f.id_categorie = cat.id_categorie
            WHERE id_charge = :chargeId");

        $requete->bindValue(":chargeId", $chargeId);
        $requete->execute();

        return $requete->fetchAll();
    }

    function getChargesOf($entreprise)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT cout_mois, cout_annee, tva, ttc
            FROM charges ch
            INNER JOIN fonctions f ON ch.id_fonction = f.id_fonction
            INNER JOIN categories cat ON f.id_categorie = cat.id_categorie
            WHERE cat.cat_entreprise = :entreprise");

        $requete->bindValue(":entreprise", $entreprise);
        $requete->execute();

        return $requete->fetchAll();
    }

    function calculateBalanceOf($champ, $entreprise)
    {
        $charges = getChargesOf($entreprise);
        $sum = 0;
        foreach ($charges as $charge)
            $sum += $charge[$champ];
        return $sum;
    }
?>