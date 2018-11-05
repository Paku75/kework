<?php
    require "/models/articleModel.php";

    $id = (int)$_GET['id'];

    if(isset($_POST['submit']))
    {
        $description = $_POST['description'];
        $id_a = $_POST['id_a'];
        
        add_commentaire($description,$id_a);
    }
    
    $article = get_article($id);

    $commentaires = get_commentaires($id);

    $like_com = get_likecom($id);
    
    require "/views/articleView.php";