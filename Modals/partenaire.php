<!-- Modal edit-->
<div class="modal fade" id="edit_<?php echo $client['client_id']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier le client</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="client_edit" role="form">
            <h5>- INFORMATION ENTREPRISE -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" class="form-control" id="login" placeholder="Entreprise" value="<?= $client['partener_entreprise'] ?>">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" class="form-control" id="email" placeholder="Effectifs" value="<?= $client['partener_activite'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <select>
                    <option>Horus Paris</option>
                    <option>Horus Corporate</option>
                    <option>Kework</option>
                </select>
              </div>
            <h5>- COORDONNES -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Nom" value="<?= $client['partener_nom'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Prénom" value="<?= $client['partener_tel'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Téléphone" value="<?= $client['partener_portable'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Email" value="<?= $client['partener_email'] ?>">
              </div>
              <div class="form-group">
                  <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Historique">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Date">
              </div>
            <h5>- INFO CONTRAT -</h5>
                Accueil<input type="checkbox" id="Accueil" name="Accueil"> 
              
              <div class="form-group">
                Conciergerie<input type="checkbox" id="Accueil" name="Accueil" > 
              </div>
              <div class="form-group">
                Buisness office<input type="checkbox" id="Accueil" name="Accueil" > 
              </div>
              <div class="form-group">
                Happiness<input type="checkbox" id="Accueil" name="Accueil" > 
              </div>
              <div class="form-group">
                Cowork<input type="checkbox" id="Accueil" name="Accueil" > 
              </div>
                <button type="submit" name="partenaireedit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>