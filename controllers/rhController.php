<?php 
    
    require __DIR__ ."/../models/rhModel.php";
    require __DIR__ ."/../views/rhView.php";

//    //Add
//    function add(){
//        if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']))
//        {
//            // get values 
//            $first_name = $_POST['first_name'];
//            $last_name = $_POST['last_name'];
//            $email = $_POST['email'];
//
//            $query = "INSERT INTO users(first_name, last_name, email) VALUES('$first_name', '$last_name', '$email')";
//            if (!$result = mysqli_query($con, $query)) 
//            {
//                exit(mysqli_error($con));
//            }
//            echo "1 Record Added!";
//        }
//    }

    //Add
    function add(){
        
        $requete = $bdd->query("INSERT INTO employeurs     
                                 (
                                      nom,
                                      prenom,
                                      date_de_naissance,
                                      n_ss,
                                      email,
                                      telephone,
                                      addresse,
                                      poste_occupee,
                                      date_entree_entreprise,
                                      date_sortie_entreprise,
                                      departement_ratache,
                                      access_departement
                                 )
	                            VALUES 
                                 (
                                      '".$_POST['nom']."',
                                      '".$_POST['prenom']."',
                                      '".$_POST['naissance']."',
                                      '".$_POST['ss']."',
                                      '".$_POST['email']."',
                                      '".$_POST['tel']."',
                                      '".$_POST['addresse']."',
                                      '".$_POST['poste']."',
                                      '".$_POST['date_entree']."',
                                      '".$_POST['date_sortie']."',
                                      '".$_POST['departement']."',
                                      '".$_POST['access_interface']."',
                                 )
                             ");
        
        
        $data = $requete->fetchAll();
        echo json_encode($data);
    }
  

    


//    //Update
//    function update(){
//        $id  = $_POST["user_id"];
//        $post = $_POST;
//        $sql = "UPDATE items SET user_login = '".$post['user_login']."' ,user_pass = '".$post['user_pass']."'
//              ,user_email = '".$post['user_email']."' 
//              WHERE user_id = '".$id."'";
//
//        $result = $bdd->query($sql);
//        $sql = "SELECT * FROM users WHERE user_id = '".$id."'"; 
//        $result = $bdd->query($sql);
//        $data = $result->fetch_assoc();
//
//        echo json_encode($data);
//    }
//
//
//    //Delete
//    function delete(){
//        $id  = $_POST["id"];
//        $sql = "DELETE FROM items WHERE id = '".$id."'";
//
//        $result = $mysqli->query($sql);
//
//        echo json_encode([$id]);
//     }
    
?>