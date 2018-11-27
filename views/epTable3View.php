
    <div class="comptabiliteContainer">
      <h3><?= $tableName ?></h3>
      <p><?= $description ?></p><br>
      <a href="#" id="btn_add3" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter une ligne</a>
      <br><br><br>
      <br><br><br><br>
      <div class="table-responsive">
      <h1>
      </h1>
      <table class="darkTable" id="myTable" class="display" style="width:100%">
    <thead>
      <tr>
        <th colspan="3">INFORMATION GENERALE3</th>
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
    <?php $eps = get_ep(); ?>
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
        <?php include ('Modals/testtable3.php') ?>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>