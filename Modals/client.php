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
                <input type="text" class="form-control" id="login" placeholder="Entreprise" value="<?= $client['client_entreprise'] ?>">
              </div>
            <h5>- EFFECTIF -</h5>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" class="form-control" id="email" placeholder="Effectifs" value="<?= $client['client_effectif'] ?>">
              </div>
            <h5>- ACTIVITE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <select>
                    <option>CAC 40</option>
                    <option>RELA estate</option>
                    <option>Banque</option>
                    <option>Cabinets avocats</option>
                    <option>Family office</option>
                </select>
              </div>
            <h5>- DEPARTEMENT ACHETEUR -</h5>
              <div class="form-group">
                <select>
                    <option>Services generaux</option>
                    <option>Achats</option>
                    <option>Commercials</option>
                    <option>Conseils</option>
                </select>
              </div>
            <h5>- CONTACT ENTREPRISE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Nom" value="<?= $client['client_nom'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Prénom" value="<?= $client['client_prenom'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Téléphone" value="<?= $client['client_tel'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Email" value="<?= $client['client_email'] ?>">
              </div>
            <h5>- SUIVI CLIENT -</h5>
              <div class="form-group">
                <select value="<?= $client['client_suivi'] ?>">
                    <option>Client en négociation</option>
                    <option>Client pas interessé</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Historique">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Date">
              </div>
            <h5>- SERVICES INSTALLES -</h5>
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
                <button type="submit" name="clientedit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>