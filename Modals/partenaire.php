<!-- Modal edit-->
<div class="modal fade" id="edit_<?php echo $partener['partener_id']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier le client</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="client_edit" role="form">
            <h5>- INFORMATION ENTREPRISE -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="hidden" name="id_edit" value="<?= $partener['partener_id'] ?>">
                <input type="text" name="entreprise_edit" class="form-control" id="login" placeholder="Entreprise" value="<?= $partener['partener_entreprise'] ?>">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" name="activite_edit" class="form-control" id="email" placeholder="Effectifs" value="<?= $partener['partener_activite'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <select name="departement_edit">
                    <option>Horus Paris</option>
                    <option>Horus Corporate</option>
                    <option>Kework</option>
                </select>
              </div>
            <h5>- COORDONNES -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="nom_edit" class="form-control" id="pass" placeholder="Nom" value="<?= $partener['partener_nom'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="fonction_edit" class="form-control" id="pass" placeholder="Fonction" value="<?= $partener['partener_fonction'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="tel_edit" class="form-control" id="pass" placeholder="Tel" value="<?= $partener['partener_tel'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="portable_edit" class="form-control" id="pass" placeholder="Téléphone" value="<?= $partener['partener_portable'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="email_edit" class="form-control" id="pass" placeholder="Email" value="<?= $partener['partener_email'] ?>">
              </div>
              <div class="form-group">
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" name="date_edit" class="form-control" id="pass" placeholder="Date" value="<?= $partener['partener_date'] ?>">
              </div>
                  <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="historique_edit" class="form-control" id="pass" placeholder="Historique" value="<?= $partener['partener_historique'] ?>">
              </div>
            <h5>- INFO CONTRAT -</h5>

            <button type="submit" name="partenaireedit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $partener['partener_id'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un partenaire</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="partenaire_delete" role="form" method="POST">
         <p style="color:white;">Voulez-vous supprimer "<?= $partener['partener_entreprise'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $partener['partener_id'] ?>">
         <button type="submit" name="partenaire_delete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div> 