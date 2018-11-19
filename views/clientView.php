<br><br>
<h1>PROSPECTION CLIENT</h1>
<br><br>

<a id="btn_add" class="btn btn-default"> 
        Ajouter un client
</a>
<br><br><br>


<!-- Modal detail-->
<div class="modal fade higherWider" id="myModal_detailClient" role="dialog">
  <div class="modal-dialog modal-lg" id="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Détail</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <!--Table modal-->
        <div class="table-responsive">
            <table class="detail" style="color: black;" style="width:100%">
                <thead>
                   <tr id="modal_menu_detail">
                       <th colspan="4">CONTACT ENTREPRISE</th>
                       <th colspan="2">HISTORIQUE</th>
                   </tr>
                   <tr id="modal_sous_menu_detail">
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
                         Email
                       </th>
                       <th>
                         Date
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
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_date']; ?>
                  </label>
                </td>
                <td>
                  <label id="historique" for="historique" class="control-label">
                    <?php echo $client['client_historique']; ?>
                  </label>
                  <p><a href="#" onclick="document.getElementById('historique').style.display = 'block'; this.style.display = 'none';">Lire...</a></p>
                  <input type="hidden" class="edit-input1" />
                </td>
              </tr>
            <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal add-->
<div class="modal fade" id="myModal_add_client" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Ajouter un client</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="client_edit" role="form">
            <h5>- INFORMATION ENTREPRISE -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <input name="entreprise" type="text" class="form-control" id="login" placeholder="Entreprise">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input name="effectif" type="text" class="form-control" id="email" placeholder="Effectifs">
              </div>
            <h5>- ACTIVITE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <select name="activite">
                    <option value="CAC 40">CAC 40</option>
                    <option value="RELA estate">RELA estate</option>
                    <option value="Banque">Banque</option>
                    <option value="Cabinets avocats">Cabinets avocats</option>
                    <option value="Family office">Family office</option>
                </select>
              </div>
            <h5>- DEPARTEMENT ACHETEUR -</h5>
              <div class="form-group">
                <select name="departement">
                    <option value="Services generaux">Services generaux</option>
                    <option value="Achats">Achats</option>
                    <option value="Commercials">Commercials</option>
                    <option value="Conseils">Conseils</option>
                </select>
              </div>
            <h5>- CONTACT ENTREPRISE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input name="nom" type="text" class="form-control" id="pass" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input name="prenom" type="text" class="form-control" id="pass" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input name="tel" type="text" class="form-control" id="pass" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input name="email" type="text" class="form-control" id="pass" placeholder="Email">
              </div>
            <h5>- SUIVI CLIENT -</h5>
              <div class="form-group">
                <select name="suivi">
                    <option value="En negociation">Client en négociation</option>
                    <option value="Pas interesse">Client pas interessé</option>
                </select>
              </div>
                <button name="clientadd" type="submit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!--Table 1-->
<div class="table-responsive">
  <table style="color: black;" id="myTable" class="display" style="width:100%">
    <thead>
     
      <tr class="menuPrincipalTab">
        <th colspan="1"></th>
        <th colspan="4">INFORMATION ENTREPRISE</th>
        <th colspan="3">CONTRAT ET SERVICES INSTALLES SUR SITE</th>
        <th colspan="1">SUIVI CLIENT</th>
        <th colspan="1"></th>
      </tr>
          
      <tr>
       <th>
          Pertinance
        </th>
        <th>
          Entreprise
        </th>
        <th>
          Effectif
        </th>
        <th>
          Activité
        </th>
        <th>
          Département acheteur
        </th>
        <th>
          Services installés sur site
        </th>
        <th>
          Début
        </th>
        <th>
          Fin
        </th>
        <th>
          Statut
        </th>
        <th>
          Modifier
        </th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($clients as $client) { ?>
      <tr>
       <td>
           <i class="fa fa-exclamation-circle"></i>
       </td>
        <td id="show_detail">
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $client['client_entreprise']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $client['client_effectif']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td id="show_detail">
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $client['client_menu_famille']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="fonction_occupee" for="fonction_occupee" class="control-label">
            <?php echo $client['client_fonction_occupee']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td id="show_detail">
          <label id="entreprise" for="entreprise" class="control-label">
            <?php echo $client['client_services']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        
        <td>
          <label id="fonction_occupee" for="fonction_occupee" class="control-label">
            <?php echo $client['client_contrat_deb']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="fonction_occupee" for="fonction_occupee" class="control-label">
            <?php echo $client['client_contrat_fin']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        <td>
          <label id="fonction_occupee" for="fonction_occupee" class="control-label">
            <?php echo $client['client_suivi']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
        
        <td>
            <div class="edit">
                <a href="#edit_<?php echo $client['client_id']; ?>" data-toggle="modal" class="btn btn-default"> 
                    <i id="edit" class="fa fa-pencil fa-lg"> </i>
                </a>
                <a href="#delete_<?= $client['client_id'] ?>" data-toggle="modal" class="btn btn-default">
                    <i id="delete" class="fa fa-trash fa-lg remove-item "> </i>
                </a>
            </div>
        </td>
        <?php include ('Modals/client.php') ?>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>


