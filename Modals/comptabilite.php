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
              <input type="hidden" id="cat_entreprise" name="cat_entreprise" value="<?= $companyName ?>">
            </div>
            <h5>CATEGORIE FONCTION</h5>
              <div class="form-group">
                <label for=""><span class="glyphicon glyphicon-eye-open"></span></label>
                <select name="id_categorie">
                <?php foreach ($categories as $categorie) { ?>
                  <option value="<?= $categorie["id_categorie"] ?>"><?= $categorie["nom_categorie"] ?></option>
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

<!-- BEGIN # MODAL ADD CHARGE -->
<div class="modal fade" id="myModal_add_charge_<?= $companyName ?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une charge</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="" role="form">
            <h5>CATEGORIE</h5>
              <div class="form-group">
                <label for=""><span class="glyphicon glyphicon-eye-open"></span></label>
                <select name="id_fonction">
                <?php foreach ($categories as $categorie) { ?>
                  <option value="<?= $categorie["id_categorie"] ?>"><?= $categorie["nom_categorie"] ?></option>
                <?php } ?>
                </select>
              </div>
            <h5>PRESTATAIRE</h5>
            <div class="form-group">
              <label for="prestataire"><span class="glyphicon glyphicon-user"></span></label>
              <input name="prestataire" type="text" class="form-control" id="prestataire" placeholder="Prestataire">
            </div>
            <h5>COUT MOIS/HT</h5>
            <div class="form-group">
              <label for="cout_mois"><span class="glyphicon glyphicon-user"></span></label>
              <input name="cout_mois" type="text" class="form-control" id="cout_mois" placeholder="Cout mois/HT">
            </div>
            <h5>COUT ANNEE/HT</h5>
            <div class="form-group">
              <label for="cout_annee"><span class="glyphicon glyphicon-user"></span></label>
              <input name="cout_annee" type="text" class="form-control" id="cout_annee" placeholder="Cout annee/HT">
            </div>
            <h5>TVA</h5>
            <div class="form-group">
              <label for="tva"><span class="glyphicon glyphicon-user"></span></label>
              <input name="tva" type="text" class="form-control" id="tva" placeholder="TVA">
            </div>
            <h5>TTC</h5>
            <div class="form-group">
              <label for="ttc"><span class="glyphicon glyphicon-user"></span></label>
              <input name="ttc" type="text" class="form-control" id="ttc" placeholder="TTC">
            </div>
            <h5>ANNIVERSAIRE CONTRAT</h5>
            <div class="form-group">
              <label for="anniv_contrat"><span class="glyphicon glyphicon-user"></span></label>
              <input name="anniv_contrat" type="date" class="form-control" id="anniv_contrat" placeholder="Anniversaire contrat">
            </div>
            <h5>HISTORIQUE</h5>
            <div class="form-group">
              <label for="historique"><span class="glyphicon glyphicon-user"></span></label>
              <textarea rows="4" cols="50" name="historique" type="textarea" class="form-control" id="historique"></textarea>
            </div>
            <h5>CONTENTIEUX</h5>
            <div class="form-group">
              <label for="contentieux"><span class="glyphicon glyphicon-user"></span></label>
              <textarea rows="4" cols="50" name="contentieux" type="textarea" class="form-control" id="contentieux"></textarea>
            </div>
            <input name="charge_add_submit" type="submit" class="btn btn-success btn-block" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->
