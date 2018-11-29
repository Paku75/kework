<!-- BEGIN # MODAL ADD CATEGORIE -->
<div class="modal fade" id="myModal_add_categorie_<?= $companyName ?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une categorie à "<?= $companyName ?>"</h4>
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
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une fonction à "<?= $companyName ?>"</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="" role="form">
            <h5>CATEGORIE FONCTION</h5>
            <div class="form-group">
              <label for=""><span class="glyphicon glyphicon-eye-open"></span></label>
              <select name="id_categorie" data-validation="required">
              <?php foreach ($categories as $categorie) { ?>
                <option value="<?= $categorie["id_categorie"] ?>"><?= $categorie["nom_categorie"] ?></option>
              <?php } ?>
              </select>
            </div>
            <h5>NOM FONCTION</h5>
            <div class="form-group">
              <label for="nom_fonction"><span class="glyphicon glyphicon-user"></span></label>
              <input name="nom_fonction" type="text" class="form-control" id="nom_fonction" placeholder="Nom fonction">
              <input type="hidden" id="cat_entreprise" name="cat_entreprise" value="<?= $companyName ?>">
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
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une charge à "<?= $companyName ?>"</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="" role="form">
            <div id="some_div" style="color: white;font-size: 30px;"></div>
            <h5>CATEGORIE</h5>
            <div class="form-group">
              <label for=""><span class="glyphicon glyphicon-eye-open"></span></label>
              <select name="id_categorie" id="id_categorie_<?= $companyName ?>" data-validation="required">
                <option value="">Sélectionner une catégorie</option>
              <?php foreach ($categories as $categorie) { ?>
                <option value="<?= $categorie["id_categorie"] ?>"><?= $categorie["nom_categorie"] ?></option>
              <?php } ?>
              </select>
            </div>
            <h5>FONCTION</h5>
            <?php $fonctionsOfChosenCategorie = getFonctionsByCategoryId($categorie['id_categorie']); ?>
            <div class="form-group">
              <label for=""><span class="glyphicon glyphicon-eye-open"></span></label>
              <select name="id_fonction" id="id_fonction_<?= $companyName ?>" data-validation="required">
                <option value="">Sélectionner une fonction</option>
              </select>
            </div>
            <!-- <button type="submit" class="form-control btn btn-primary btn-small" name="ok" id="ok">Submit</button> -->
            <h5>PRESTATAIRE</h5>
            <div class="form-group">
              <label for="prestataire"><span class="glyphicon glyphicon-user"></span></label>
              <input name="prestataire" type="text" class="form-control" id="prestataire" placeholder="Prestataire" data-validation="required">

            </div>
            <h5>COUT MOIS/HT</h5>
            <div class="form-group">
              <label for="cout_mois"><span class="glyphicon glyphicon-user"></span></label>
              <input name="cout_mois" type="text" class="form-control" id="cout_mois" placeholder="Cout mois/HT" data-validation="required">
            </div>
            <!-- <h5>COUT ANNEE/HT</h5>
            <div class="form-group">
              <label for="cout_annee"><span class="glyphicon glyphicon-user"></span></label>
              <input name="cout_annee" type="text" class="form-control" id="cout_annee" placeholder="Cout annee/HT" data-validation="required">
            </div> -->
            <h5>Taux Tva</h5>
            <div class="form-group">
              <label for="taux_tva"><span class="glyphicon glyphicon-user"></span></label>
              <input name="taux_tva" type="text" class="form-control" id="taux_tva" placeholder="Taux Tva" data-validation="required">
            </div>
            <!-- <h5>TTC</h5>
            <div class="form-group">
              <label for="ttc"><span class="glyphicon glyphicon-user"></span></label>
              <input name="ttc" type="text" class="form-control" id="ttc" placeholder="TTC" data-validation="required">
            </div> -->
            <h5>ANNIVERSAIRE CONTRAT</h5>
            <div class="form-group">
              <label for="anniv_contrat"><span class="glyphicon glyphicon-user"></span></label>
              <input name="anniv_contrat" type="date" class="form-control" id="anniv_contrat" placeholder="Anniversaire contrat" data-validation="required">
            </div>
            <h5>HISTORIQUE</h5>
            <div class="form-group">
              <label for="historique"><span class="glyphicon glyphicon-user"></span></label>
              <textarea rows="4" cols="50" name="historique" type="textarea" class="form-control" id="historique" data-validation="required"></textarea>
            </div>
            <h5>CONTENTIEUX</h5>
            <div class="form-group">
              <label for="contentieux"><span class="glyphicon glyphicon-user"></span></label>
              <textarea rows="4" cols="50" name="contentieux" type="textarea" class="form-control" id="contentieux" data-validation="required"></textarea>
            </div>
            <input name="charge_add_submit" type="submit" class="btn btn-success btn-block" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  {
    $("#id_categorie_<?= $companyName ?>").change(function()
    {
      var category_id = $(this).val();
      
      $.ajax
      ({
        type: "POST",
        url: "comptabilite",
        data: {idCategorie:category_id},
        cache: false,
        success: function(fonctions)
        {
          $response = $(fonctions).find('#response').html(); // This works if because div is not TOP level (layout.php, ...)
          //$response = $(fonctions).filter('#response').html(); // This works if div is TOP level
          // console.log($response);
          $("#id_fonction_<?= $companyName ?>").html($response);
        }
      });
    });
  });

  $.validate({
    // lang: 'es'
  });
</script>