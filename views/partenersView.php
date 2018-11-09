<br><br>
<h1>PARTENERS</h1>
<br><br>

<!-- Table -->
<div class="table-responsive">
  <table style="color: black;" id="myTable" class="display" style="width:100%">
    <thead>
     
      <tr id="menuPartener">
        <th colspan="2">INFORMATION PARTENER</th>
        <th colspan="2">CONTACT PARTENER</th>
        <th colspan="3">COORDONNES</th>
        <th colspan="2">RAPPORTS / HISTORIQUE</th>
        <th colspan="3">INFO CONRACT</th>
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
          Tel
        </th>
        <th>
          Portable
        </th>
        <th>
          E-mail
        </th>
        <th>
          Ca rapporte
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
          <label id="historique" for="historique" class="control-label">
            <?php echo $partener['partener_historique']; ?>
          </label>\
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
