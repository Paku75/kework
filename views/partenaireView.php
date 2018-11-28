<br><br>
<h1>PARTENAIRES</h1>
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
        <h4><span class="glyphicon glyphicon-lock"></span>Ajouter un partenaire</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form id="client_edit" role="form" method="POST">
            <h5>INFORMATION PARTENAIRE</h5>
              <div class="form-group">
                <label for="entreprise"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="entreprise" id="entreprise_modal" placeholder="Entreprise">
              </div>
              <div class="form-group">
                <label for="activite"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="activite" id="activite_modal" placeholder="Activité">
              </div>
              <div class="form-group">
                <label for="departement_soucripteur"><span class="glyphicon glyphicon-user"></span>Departement soucripteur</label>
                <select name="departement">
                  <option value="Horus Paris">Horus paris</option>
                  <option value="Horus Corporate">Horus corporate</option>
                  <option value="Kework">Kework</option>
                </select>
              </div>
            <h5>COORDONNES</h5>
              <div class="form-group">
                <label for="nom"><span class="glyphicon glyphicon-eye-open"></span></label>
                <input type="text" class="form-control" name="nom" id="nom_modal" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="nom"><span class="glyphicon glyphicon-eye-open"></span></label>
                <input type="text" class="form-control" name="fonction" id="nom_modal" placeholder="Fonction">
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
              <!--
              <div class="form-group">
                <label for="xxxxx"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="_modal" id="xxxxx_modal" placeholder="xxxxx">
              </div>
              -->
              <input name="partenaireadd" type="submit" class="btn btn-success btn-block" value="Valider">
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
        <th colspan="3">INFORMATION PARTENAIRE</th>
        <th colspan="5">COORDONNES</th>
        <th colspan="2">CHIFRES / HISTORIQUE</th>
        <th colspan="3">INFO CONRACT</th>
        <th></th>
      </tr>
      
      <tr>
        <th>
          Entreprise
        </th>
        <th>
          Activite
        </th>
        <th>
          Departement soucripteur
        </th>
        <th>
          Nom
        </th>
        <th>
          Fonction
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
          CA
        </th>
        <th>
          Historique
        </th>
        <th>
          Contrat
        </th>
        <th>
          Debut contrat
        </th>
        <th>
          Fin contrat
        </th>
        <th>
          Modifier
        </th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($parteners as $partener) { ?>
      <tr>
        <td id="show_detail">
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $partener['partener_entreprise']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="activite" for="activite" class="control-label">
            <?php echo $partener['partener_activite']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="departement_soucripteur" for="departement_soucripteur" class="control-label">
            <?php echo $partener['partener_departement_soucripteur']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="nom" for="nom" class="control-label">
            <?php echo $partener['partener_nom']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="nom" for="nom" class="control-label">
            <?php echo $partener['partener_fonction']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="tel" for="tel" class="control-label">
            <?php echo $partener['partener_tel']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="portable" for="portable" class="control-label">
            <?php echo $partener['partener_portable']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="email" for="email" class="control-label">
            <?php echo $partener['partener_email']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="ca_rapporte" for="ca_rapporte" class="control-label">
            <?php echo $partener['partener_ca_rapporte']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="p_historique" for="p_historique" class="control-label">
            <?php echo $partener['partener_historique']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="contrat" for="contrat" class="control-label">
            <?php echo $partener['partener_contrat']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="debut_contrat" for="debut_contrat" class="control-label">
            <?php echo $partener['partener_debut_contrat']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="fin_contrat" for="fin_contrat" class="control-label">
            <?php echo $partener['partener_fin_contrat']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
            <div class="edit">
                <a href="#edit_<?php echo $partener['partener_id']; ?>" data-toggle="modal" class="btn btn-default"> 
                    <i id="edit" class="fa fa-pencil fa-lg"> </i>
                </a>
                <a href="#delete_<?= $partener['partener_id'] ?>" data-toggle="modal" class="btn btn-default">
                    <i id="delete" class="fa fa-trash fa-lg remove-item "> </i>
                </a>
            </div>
        </td>
        <?php include ('Modals/partenaire.php') ?>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>