<h2><?= $article['titre']; ?></h2>
<p><?= $article['contenu']; ?></p>


<h3>Les commentaires de cet article</h3>
<?php foreach($commentaires as $commentaire): ?>
    <p><?= $commentaire['description']; ?></p>
    <p>Par : <?= $commentaire['login']; ?></p>
    <?= '------------------------------' ?>
<a href="action.php?t=1&id=<?= $like_com ?>">J'aime</a> (15)
<?php endforeach; ?>


<form action="" method="post">
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <br>
    <input type="hidden" name="id_a" value ="<?= $article['id_a']; ?>">
    <input type="submit" name="submit"/>
</form>