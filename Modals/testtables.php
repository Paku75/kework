<!-- BEGIN # MODAL ADD TABLE 1 -->
<div class="modal fade" id="myModal_add_ep" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une nouvelle école / partenaire</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form id="client_edit" role="form" method="POST">
            <h5>INFORMATION GENERALE</h5>
              <div class="form-group">
                <label for="ecole"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="ecole" id="entreprise_modal" placeholder="Ecole">
              </div>
              <div class="form-group">
                <label for="specialite"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="specialite" id="activite_modal" placeholder="Specialite">
              </div>
              <div class="form-group">
                <label for="departement_soucripteur"><span class="glyphicon glyphicon-user"></span>Departement soucripteur</label>
                <select name="departement">
                  <option value="Informatique">Informatique</option>
                  <option value="Commercial">Commercial</option>
                </select>
              </div>
            <h5>COORDONNES</h5>
              <div class="form-group">
                <label for="nom"><span class="glyphicon glyphicon-eye-open"></span></label>
                <input type="text" class="form-control" name="nom" id="nom_modal" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="tel"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="tel" id="tel_modal" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="portable"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="portable" id="portable_modal" placeholder="Portable">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="email" id="email_modal" placeholder="E-mail">
              </div>
              <h5>Calendrier</h5>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" class="form-control" name="calendrier" id="email_modal">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="historique" id="email_modal" placeholder="Historique">
              </div>
              <h5>Début stage</h5>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" class="form-control" name="deb" id="email_modal">
              </div>
              <h5>Fin stage</h5>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" class="form-control" name="fin" id="email_modal">
              </div>
              
              <input name="epadd" type="submit" class="btn btn-success btn-block" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->


<!-- Modal edit-->
<div class="modal fade" id="edit_<?php echo $ep['id_ep']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier le client</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="client_edit" role="form">
            <h5>- INFORMATION GENERALE -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="hidden" name="id" value="<?= $ep['id_ep'] ?>">
                <input type="text" name="ecole" class="form-control" id="login" placeholder="Entreprise" value="<?= $ep['ecole'] ?>">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" name="specialite" class="form-control" id="email" placeholder="Effectifs" value="<?= $ep['specialite'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <select name="departement">
                    <option>Informatique</option>
                    <option>Commercial</option>
                </select>
              </div>
            <h5>- COORDONNES -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="nom" class="form-control" id="pass" placeholder="Nom" value="<?= $ep['nom'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="tel" class="form-control" id="pass" placeholder="Tel" value="<?= $ep['tel'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="portable" class="form-control" id="pass" placeholder="Téléphone" value="<?= $ep['portable'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="email" class="form-control" id="pass" placeholder="Email" value="<?= $ep['email'] ?>">
              </div>
              <h5>- CALENDRIER -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" name="calendrier" class="form-control" id="pass" value="<?= $ep['calendrier'] ?>">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" name="historique" class="form-control" id="pass" placeholder="Historique" value="<?= $ep['historique'] ?>">
              </div>
              <h5>- DEBUT STAGE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" name="deb" class="form-control" id="pass" value="<?= $ep['debut_stage'] ?>">
              </div>
              <h5>- FIN STAGE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" name="fin" class="form-control" id="pass" value="<?= $ep['fin_stage'] ?>">
              </div>

            <button type="submit" name="epedit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $ep['id_ep'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un partenaire</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="partenaire_delete" role="form" method="POST">
         <p style="color:white;">Voulez-vous supprimer "<?= $ep['ecole'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $ep['id_ep'] ?>">
         <button type="submit" name="epdelete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div> 