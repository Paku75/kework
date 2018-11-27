<br><br>
<h1>SUIVI RECRUTEMENT</h1>
<br><br>

<a href="#" id="btn_add" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter une ligne</a>
<br><br><br>


<!-- Modal add-->
<div class="modal fade" id="myModal_add_partenaire" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter une ligne</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form id="client_edit" role="form" method="POST">
            <h5>INFORMATION GENERALE</h5>
              <div class="form-group">
                <label for="ecole"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="nom" id="entreprise_modal" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="ecole"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="prenom" id="entreprise_modal" placeholder="Prenom">
              </div>
              <div class="form-group">
                <label for="specialite"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="ecole" id="activite_modal" placeholder="Ecole">
              </div>
              <div class="form-group">
                <label for="specialite"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="niveau" id="activite_modal" placeholder="Niveau ecole">
              </div>
              <div class="form-group">
                <label for="portable"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="portable" id="portable_modal" placeholder="Portable">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="email" id="email_modal" placeholder="E-mail">
              </div>
            <h5>DATE STAGE SOUHAITEE</h5>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" class="form-control" name="date_souhaitee" id="email_modal">
              </div>
              <div class="form-group">
                <label for="tel"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="duree" id="tel_modal" placeholder="Durée stage">
              </div>
            <h5>SUIVI CANDIDATURE</h5>
              <div class="form-group">
                <select name="suivi">
                    <option>Accepte</option>
                    <option>Refuse</option>
                    <option>En attente</option>
                </select>
              </div>
              <input name="sradd" type="submit" class="btn btn-success btn-block" value="Valider">
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
        <th colspan="4">INFORMATION GENERALE</th>
        <th colspan="3"> SUIVI</th>
        <th colspan="2">COORDONNES</th>
        <th colspan="1"></th>
      </tr>
      
      <tr>
        <th>
          Nom
        </th>
        <th>
          Prénom
        </th>
        <th>
          Ecole
        </th>
        <th>
          Niveau ecole
        </th>
        <th>
          Date stage souhaitée
        </th>
        <th>
          Durée stage
        </th>
        <th>
          Suivi candidature
        </th>
        <th>
          Portable
        </th>
        <th>
          E-mail
        </th>
        <th>
          Modifier
        </th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($recrutement as $r) { ?>
      <tr>
        <td id="show_detail">
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $r['nom']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="activite" for="activite" class="control-label">
            <?php echo $r['prenom']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="departement_soucripteur" for="departement_soucripteur" class="control-label">
            <?php echo $r['ecole']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="nom" for="nom" class="control-label">
            <?php echo $r['niveau']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="portable" for="portable" class="control-label">
            <?php echo $r['date_souhaitee']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="email" for="email" class="control-label">
            <?php echo $r['duree']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="tel" for="tel" class="control-label">
            <?php echo $r['suivi']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="ca_rapporte" for="ca_rapporte" class="control-label">
            <?php echo $r['portable']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="p_historique" for="p_historique" class="control-label">
            <?php echo $r['email']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
            <div class="edit">
                <a href="#edit_<?php echo $r['id_recrutement']; ?>" data-toggle="modal" class="btn btn-default"> 
                    <i id="edit" class="fa fa-pencil fa-lg"> </i>
                </a>
                <a href="#delete_<?= $r['id_recrutement'] ?>" data-toggle="modal" class="btn btn-default">
                    <i id="delete" class="fa fa-trash fa-lg remove-item "> </i>
                </a>
            </div>
        </td>
        <?php include ('Modals/sr.php') ?>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>