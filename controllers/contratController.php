<?php
require __DIR__ ."/../models/contratModel.php";
require __DIR__ ."/../views/contratView.php";

    if(isset($_POST['contratadd']))
    {   
        $nom = $_POST['nom'];
        $date = date('Y-m-d', strtotime($_POST['date']));
        
        if(!empty($_FILES['file']))
        {
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png','pdf');

            if(in_array($fileActualExt, $allowed))
            {
                if($fileError === 0)
                {
                    if($fileSize < 2097152)
                    {
                        $fileNameNew = uniqid('',true).".".$fileActualExt;
                        $fileDestination = 'uploaded/'.$fileName;
                        $result = move_uploaded_file($fileTmpName,$fileDestination);
                        if($result)
                        {   
                            $req = $bdd->prepare('INSERT INTO contrat(nom_contrat,date_contrat,lien) VALUE (:nom,:date_contrat,:lien) ');
                            
                            $req->execute(array('nom' => $nom,'date_contrat' => $date,'lien' => $fileName));
                            header("Location: contrat");
                        } else { echo "Impossible de enregistrer dans la base"; }
                    } else { echo "Votre fichier ne doit pas dépasser 2 Mo"; }
                } else { echo "Une erreur est survenue"; }
            } else { echo "<style color='.'"red"'.'>Le type de fichier est incorrect ou vous n'avez pas upload de fichier"; }
        } else 
            {
                add_contrat($nom,$date_contrat);
            }
    }

    if(isset($_POST['contrat_delete']))
    {
        $id = $_POST['id_delete'];
        delete_contrat($id);
    }
?>