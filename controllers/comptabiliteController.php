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
?>