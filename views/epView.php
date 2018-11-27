<br><br>
<h1>ECOLE / PARTENAIRE</h1>
<br><br>

<a href="#" id="btn_add" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter un partenaire</a>
<br><br><br>


<!-- Modal add-->
<div class="modal fade" id="myModal_add_partenaire" role="dialog">
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


<!-- Table -->
<div class="table-responsive">
  <h1>
    <?php //echo $_POST['entreprise_modal']; ?>
  </h1>
  <table class="darkTable" id="myTable" class="display" style="width:100%">
    <thead>
      <tr>
        <th colspan="3">INFORMATION GENERALE</th>
        <th colspan="4">COORDONNES</th>
        <th colspan="2"> HISTORIQUE</th>
        <th colspan="2">Stage</th>
        <th></th>
      </tr>
      
      <tr>
        <th>
          Ecole
        </th>
        <th>
          Specialite
        </th>
        <th>
          Departement soucripteur
        </th>
        <th>
          Nom
        </th>
        <th>
          Tel
        </th>
        <th>
          Portable
        </th>
        <th>
          E-mail
        </th>
        <th>
          Calendrier
        </th>
        <th>
          Historique
        </th>
        <th>
          Debut stage
        </th>
        <th>
          Fin stage
        </th>
        <th>
          Modifier
        </th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($eps as $ep) { ?>
      <tr>
        <td id="show_detail">
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $ep['ecole']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="activite" for="activite" class="control-label">
            <?php echo $ep['specialite']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="departement_soucripteur" for="departement_soucripteur" class="control-label">
            <?php echo $ep['departement']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="nom" for="nom" class="control-label">
            <?php echo $ep['nom']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="tel" for="tel" class="control-label">
            <?php echo $ep['tel']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="portable" for="portable" class="control-label">
            <?php echo $ep['portable']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="email" for="email" class="control-label">
            <?php echo $ep['email']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="ca_rapporte" for="ca_rapporte" class="control-label">
            <?php echo $ep['calendrier']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="p_historique" for="p_historique" class="control-label">
            <?php echo $ep['historique']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="contrat" for="contrat" class="control-label">
            <?php echo $ep['debut_stage']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="debut_contrat" for="debut_contrat" class="control-label">
            <?php echo $ep['fin_stage']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
            <div class="edit">
                <a href="#edit_<?php echo $ep['id_ep']; ?>" data-toggle="modal" class="btn btn-default"> 
                    <i id="edit" class="fa fa-pencil fa-lg"> </i>
                </a>
                <a href="#delete_<?= $ep['id_ep'] ?>" data-toggle="modal" class="btn btn-default">
                    <i id="delete" class="fa fa-trash fa-lg remove-item "> </i>
                </a>
            </div>
        </td>
        <?php include ('Modals/ep.php') ?>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>