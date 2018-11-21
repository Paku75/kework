<!-- Modal edit -->
  <div class="modal fade" id="edit_<?php echo $emp['employee_id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Modifier un employeur</h4>
        </div>
        <div style="color:black;" class="modal-body" style="padding:40px 50px;">
          <form method="POST" id="colla_add" role="form">
            <h5>- IDENTITE -</h5>
            <div class="form-group">
              <label for="login"><span class="glyphicon glyphicon-user"></span></label>
              <input type="hidden" name="id" value="<?= $emp['employee_id'] ?>">
              <input type="text" name="nom" class="form-control" id="login" placeholder="Nom" value="<?= $emp['nom'] ?>">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span></label>
              <input type="text" name="prenom" class="form-control" id="email" placeholder="Prenom" value="<?= $emp['prenom'] ?>">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
              <input type="date" name="naissance" class="form-control" id="pass" placeholder="Date de naissance" value="<?= $emp['date_de_naissance'] ?>">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
              <input type="text" name="ss" class="form-control" id="pass" placeholder="Sécurité sociale" value="<?= $emp['n_ss'] ?>">
            </div>
            <h5>- COORDONNES -</h5>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
              <input type="text" name="email" class="form-control" id="pass" placeholder="Email" value="<?= $emp['email'] ?>">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" name="tel" class="form-control" id="pass" placeholder="Telephone" value="<?= $emp['telephone'] ?>">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" name="adresse" class="form-control" id="pass" placeholder="Adresse" value="<?= $emp['addresse'] ?>">
            </div>
            <h5>- POSTE ENTREPRISE -</h5>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" name="poste" class="form-control" id="pass" placeholder="Poste" value="<?= $emp['poste_occupee'] ?>">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="date" name="entree" class="form-control" id="pass" placeholder="Date entrée entreprise" value="<?= $emp['date_entree_entreprise'] ?>">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="date" name="sortie" class="form-control" id="pass" placeholder="Date sortie entreprise" value="<?= $emp['date_sortie_entreprise'] ?>">
            </div>
            <h5>- MANAGER INTERNE -</h5>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" name="departement" class="form-control" id="pass" placeholder="Département" value="<?= $emp['departement_ratache'] ?>">
            </div>
            <h5>- ACCESS DEPARTEMENT -</h5>
            <div class="form-group">
              <select name="access" value="<?= $emp['access_departement'] ?>">
                  <option value="1">Oui</option>
                  <option value="0">Non</option>
              </select>
            </div>
              <button name="rhedit" type="submit" class="btn btn-success btn-block">Valider</button>
          </form>
        </div>
      </div>
    </div>
  </div>  
  
 
<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $emp['employee_id'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un partenaire</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="rh_delete" role="form" method="POST">
         <p>Voulez-vous supprimer "<?= $emp['nom'] ?>"!</p>
         <input type="hidden" name="id_delete" value="<?= $emp['employee_id'] ?>">
         <button type="submit" name="rh_delete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div> 