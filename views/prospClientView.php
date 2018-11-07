
<h1>Prospection client</h1>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier l'employee</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form">
          <div class="form-group">
            <label for="login"><span class="glyphicon glyphicon-user"></span> Login</label>
            <input type="text" class="form-control" id="login" placeholder="Nouveau login">
          </div>
          <div class="form-group">
            <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
            <input type="text" class="form-control" id="email" placeholder="Nouveau email">
          </div>
          <div class="form-group">
            <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
            <input type="text" class="form-control" id="pass" placeholder="Nouveau mot de passe">
          </div>
            <button type="submit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>
    

<!--Table-->
<div class="table-responsive">
  <table id="myTable" class="table table-bordered display" style="width:100%">
    <thead>
      <tr>
        <th>
          Nom
        </th>
        <th>
          Prénom
        </th>
        <th>
          Tel
        </th>
        <th>
          E-mail
        </th>
        <th>
          Entreprise
        </th>
        <th>
          Contact entreprise
        </th>
        <th>
          Historique
        </th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($clients as $client) { ?>
      <tr>
        <td>
          <label id="nom" for="nom" class="control-label">
            <?php echo $client['client_nom']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="prenom" for="prenom" class="control-label">
            <?php echo $client['client_prenom']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="tel" for="tel" class="control-label">
            <?php echo $client['client_tel']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="email" for="email" class="control-label">
            <?php echo $client['client_email']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="fonction_occupee" for="fonction_occupee" class="control-label">
            <?php echo $client['client_fonction_occupee']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $client['client_entreprise']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="contact_entreprise" for="contact_entreprise" class="control-label">
            <?php echo $client['client_contact_entreprise']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="historique" for="historique" class="control-label">
            <?php echo $client['client_historique']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>

        <td>
          <div class="edit">
            <a id="btn_edit" class="btn btn-default"> 
              <i id="edit" class="fa fa-pencil fa-lg"> </i>
            </a>
            <a id="supprimer" class="btn btn-default"> 
              <i id="edit" class="fa fa-trash fa-lg remove-item "> </i>
            </a>
         </div>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
