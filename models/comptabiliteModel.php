<?php
    function getCategoriesByCompanyName($companyName)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM categories WHERE cat_entreprise = :companyName OR cat_entreprise = 'both'");
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

    function getChargesByCategorie($companyName, $categoryName)
    {
        global $bdd;
        
        // $requete = $bdd->prepare("SELECT * FROM charges WHERE entreprise = :companyName");
        $requeteCalc = $bdd->prepare("UPDATE charges SET cout_annee = cout_mois * 12, tva = taux_tva / 100 * cout_mois, ttc = cout_mois + tva");
        $requeteCalc->execute();
        $requete = $bdd->prepare("SELECT ch.*, f.nom_fonction AS nom_fonction, cat.nom_categorie AS nom_categorie
        	FROM charges ch
        	INNER JOIN fonctions f ON ch.id_fonction = f.id_fonction
        	INNER JOIN categories cat ON f.id_categorie = cat.id_categorie
        	WHERE entreprise = :companyName AND nom_categorie = :categorie");

        $requete->bindValue(":companyName", $companyName);
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

    function addCharge($idFonction, $entreprise, $prestataire, $coutMois, $tauxTva, $annivContrat, $historique, $contentieux)
    {
        global $bdd;
        $requete = $bdd->prepare("INSERT INTO charges(id_fonction, entreprise, prestataire, cout_mois, taux_tva, anniv_contrat, historique, contentieux)
            VALUES(:idFonction, :entreprise, :prestataire, :coutMois, :tauxTva, :annivContrat, :historique, :contentieux)");
        $requete->bindValue(":idFonction", $idFonction);
        $requete->bindValue(":entreprise", $entreprise);
        $requete->bindValue(":prestataire", $prestataire);
        $requete->bindValue(":coutMois", $coutMois);
        $requete->bindValue(":tauxTva", $tauxTva);
        $requete->bindValue(":annivContrat", $annivContrat);
        $requete->bindValue(":historique", $historique);
        $requete->bindValue(":contentieux", $contentieux);

        try
        {
            echo "<b><br>idFonction = ". $idFonction ."<br>";
            echo "entreprise = ". $entreprise ."<br>";
            echo "prestataire = ". $prestataire ."<br>";
            echo "coutMois = ". $coutMois ."<br>";
            echo "tauxTva = ". $tauxTva ."<br>";
            echo "annivContrat = ". $annivContrat ."<br>";
            echo "historique = ". $historique ."<br>";
            echo "contentieux = ". $contentieux ."<br><br></b>";
            //$requete->execute();
            //header('Location: comptabilite');
        }
        catch(PDOException $e)
        {   
        ?> 
           <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
           <script src="Toastr/toastr.min.js"></script>
           <script>toastr.warning('Veuillez compléter tous les champs', 'Warning', {timeOut: 5000});</script>;
        <?php }
    }
?>