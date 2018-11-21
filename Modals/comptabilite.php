<!-- BEGIN # MODAL ADD CATEGORIE -->
<div class="modal fade" id="myModal_add_categorie_<?= $companyName ?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une categorie</h4>
      </div>
      <div class="modal-body">
        <form method="POST" id="" role="form">
            <h5>NOM CATEGORIE</h5>
            <div class="form-group">
              <label for="nom_categorie"><span class="glyphicon glyphicon-user"></span></label>
              <input name="nom_categorie" type="text" class="form-control" id="login" placeholder="Nom categorie">
              <input type="hidden" id="cat_entreprise" name="cat_entreprise" value="<?= $companyName ?>">
            </div>
            <input name="categorie_add_submit" id="categorie_add_submit" type="submit" class="btn btn-success btn-block" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->

<!-- BEGIN # MODAL ADD FONCTION -->
<div class="modal fade" id="myModal_add_fonction_<?= $companyName ?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une fonction</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="" role="form">
            <h5>NOM FONCTION</h5>
            <div class="form-group">
              <label for="nom_fonction"><span class="glyphicon glyphicon-user"></span></label>
              <input name="nom_fonction" type="text" class="form-control" id="nom_fonction" placeholder="Nom fonction">
            </div>
            <h5>CATEGORIE FONCTION</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
                <select name="categorie_fonction">
                <?php foreach ($categories as $categorie) { ?>
                  <option value="categorie<?= $categorie["id_categorie"] ?>"><?= $categorie["nom_categorie"] ?></option>
                <?php } ?>
                </select>
              </div>
            <input name="fonction_add_submit" type="submit" class="btn btn-success btn-block" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->
