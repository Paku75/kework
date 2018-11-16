<?php 
    function get_article($id)
    {   
        global $bdd;
        
        $requete = $bdd->query("SELECT * FROM articles WHERE id_a = ".$id);
        return $requete->fetch();
    }

    function get_commentaires($id)
    {
        global $bdd;
        
        $requete = $bdd->query("SELECT * FROM commentaires c INNER JOIN users u ON c.id_u = u.id_u WHERE id_a = ".$id);
//        $requete = $bdd->query("SELECT * FROM commentaires c,users u WHERE u.id_u = c.id_u AND id_a = ".$id);    Version Mesle
        return $requete->fetchAll();
    }

    function add_commentaire($description,$id_a)
    {
        global $bdd;
        
        $requete = $bdd->prepare("INSERT INTO commentaires (description,id_a,id_u) VAlUES (:description, :id_a,$_SESSION[id_u])");
        $requete->bindValue(":description",$description,PDO::PARAM_STR);
        $requete->bindValue(":id_a",$id_a,PDO::PARAM_INT);
        $requete->execute();
    }

    function get_likecom($id)
    {
        global $bdd;
        
        $check = $bdd->prepare('SELECT id FROM articles WHERE id_a = ?');
        $check->execute(array($id));
        $ins = $bdd->prepare('INSERT INTO likes (id_article) VALUES (?)');
        $ins->execute(array($id));
//        header('Location: http://localhost/blogmvc/article'.$id);
    }
