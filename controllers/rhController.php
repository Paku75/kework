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
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        
        
        $sql = "UPDATE items SET user_login = '".$post['user_login']."' ,user_pass = '".$post['user_pass']."'
              ,user_email = '".$post['user_email']."' 
              WHERE user_id = '".$id."'";

        $result = $bdd->query($sql);
        $sql = "SELECT * FROM users WHERE user_id = '".$id."'"; 
        $result = $bdd->query($sql);
        $data = $result->fetch_assoc();

        echo json_encode($data);
    }


    //Update
    function update(){
        $id  = $_POST["user_id"];
        $post = $_POST;
        $sql = "UPDATE items SET user_login = '".$post['user_login']."' ,user_pass = '".$post['user_pass']."'
              ,user_email = '".$post['user_email']."' 
              WHERE user_id = '".$id."'";

        $result = $bdd->query($sql);
        $sql = "SELECT * FROM users WHERE user_id = '".$id."'"; 
        $result = $bdd->query($sql);
        $data = $result->fetch_assoc();

        echo json_encode($data);
    }

    
?>