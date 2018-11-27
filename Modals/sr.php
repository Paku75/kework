<!-- Modal edit-->
<div class="modal fade" id="edit_<?php echo $r['id_recrutement']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier la ligne</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="client_edit" role="form">
            <h5>- INFORMATION GENERALE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="hidden" name="id" value="<?= $r['id_recrutement'] ?>">
                <input type="text" name="nom" class="form-control" id="pass" placeholder="Nom" value="<?= $r['nom'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="prenom" class="form-control" id="pass" placeholder="Nom" value="<?= $r['prenom'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="ecole" class="form-control" id="pass" placeholder="Nom" value="<?= $r['ecole'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="niveau" class="form-control" id="pass" placeholder="Nom" value="<?= $r['niveau'] ?>">
              </div>
            <h5>- DATE DE STAGE SOUHAITEE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" name="date_souhaitee" class="form-control" id="pass" placeholder="Nom" value="<?= $r['date_souhaitee'] ?>">
              </div>
            <h5>- DUREE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="duree" class="form-control" id="pass" placeholder="Nom" value="<?= $r['duree'] ?>">
              </div>
            <h5>- SUIVI -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <select name="suivi">
                    <option>Accepte</option>
                    <option>Refuse</option>
                    <option>En attente</option>
                </select>
              </div>
            <h5>- COORDONNES -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="portable" class="form-control" id="pass" placeholder="Téléphone" value="<?= $r['portable'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="email" class="form-control" id="pass" placeholder="Email" value="<?= $r['email'] ?>">
              </div>

            <button type="submit" name="sredit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $r['id_recrutement'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer une ligne</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="partenaire_delete" role="form" method="POST">
         <p style="color:white;">Voulez-vous supprimer "<?= $r['nom'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $r['id_recrutement'] ?>">
         <button type="submit" name="srdelete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div> 