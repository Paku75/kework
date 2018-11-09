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
                       <th colspan="5">MENU FAMILLE</th>
                       <th colspan="3">SUIVI CLIENT</th>
                       <th colspan="2"></th>
                       <th colspan="5">SERVICES INSTALLES </th>
                   </tr>
                   
                   <tr id="modal_sous_menu_detail">
                       <th>
                         CAC 40
                       </th>
                       <th>
                         RELA Estate
                       </th>
                       <th>
                         Banque
                       </th>
                       <th>
                         Cabinets avocats
                       </th>
                       <th>
                         Family office
                       </th>
                       <th>
                         Clients en négociation
                       </th>
                       <th>
                         Clients équipés
                       </th>
                       <th>
                         Clients pas interessés
                       </th>
                       <th>
                         Historique
                       </th>
                       <th>
                         Date
                       </th>
                       <th>
                         Accueil 
                       </th>
                       <th>
                         Conciergerie 
                       </th>
                       <th>
                         Buisness office 
                       </th>
                       <th>
                         Happiness 
                       </th>
                       <th>
                         Cowork 
                       </th>
                       
                   </tr>
                </thead>
                <tbody>
                <?php foreach ($clients as $client) { ?>
              <tr>
                <td>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_cac40']; ?>
                  </label>
                  <input type="hidden" class="edit-input1" />
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_rela_estate']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_banque']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_cabinet_avocat']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_en_negociation']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_equipe']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_pas_interesse']; ?>
                  </label>
                </td>
                <td>
                  <label id="historique" for="historique" class="control-label">
                    <?php echo $client['client_historique']; ?>
                  </label>
                  <p><a href="#" onclick="document.getElementById('historique').style.display = 'block'; this.style.display = 'none';">Lire...</a></p>
                  <input type="hidden" class="edit-input1" />
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_date']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_accueil']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_conciergerie']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_buisness_office']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_happiness']; ?>
                  </label>
                </td>
                <td>
                  <label id="email" for="email" class="control-label">
                    <?php echo $client['client_cowork']; ?>
                  </label>
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
<div class="modal fade" id="myModal_add" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Ajouter un client</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form id="client_edit" role="form">
            <h5>- INFORMATION ENTREPRISE -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" class="form-control" id="login" placeholder="Entreprise">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" class="form-control" id="email" placeholder="Effectifs">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Contact entreprise">
              </div>
              <div class="form-group">
            <h5>- CONTACT ENTREPRISE -</h5>
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Fonction occupée">
              </div>
            <h5>- COORDONNES -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Email">
              </div>
            <h5>- MENU FAMILLE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="CAC 40">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="RELA estate">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Banque">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Cabinets avocats">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Family office">
              </div>
            <h5>- SUIVI CLIENT -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Clients en négociation </label>
                <select>
                    <option>Oui</option>
                    <option>Non</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Clients équipés </label>
                <select>
                    <option>Oui</option>
                    <option>Non</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Clients pas interessé </label>
                <select>
                    <option>Oui</option>
                    <option>Non</option>
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
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Accueil">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Conciergerie">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Buisness office">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Happiness">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Cowork">
              </div>
                <button type="submit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal edit-->
<div class="modal fade" id="myModal_edit" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier le client</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form id="client_edit" role="form">
            <h5>- INFORMATION ENTREPRISE -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" class="form-control" id="login" placeholder="Entreprise">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" class="form-control" id="email" placeholder="Effectifs">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Contact entreprise">
              </div>
              <div class="form-group">
            <h5>- CONTACT ENTREPRISE -</h5>
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Fonction occupée">
              </div>
            <h5>- COORDONNES -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Email">
              </div>
            <h5>- MENU FAMILLE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="CAC 40">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="RELA estate">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Banque">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Cabinets avocats">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Family office">
              </div>
            <h5>- SUIVI CLIENT -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Clients en négociation </label>
                <select>
                    <option>Oui</option>
                    <option>Non</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Clients équipés </label>
                <select>
                    <option>Oui</option>
                    <option>Non</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> Clients pas interessé </label>
                <select>
                    <option>Oui</option>
                    <option>Non</option>
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
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Accueil">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Conciergerie">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Buisness office">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Happiness">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" id="pass" placeholder="Cowork">
              </div>
                <button type="submit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Table 1-->
<div class="table-responsive">
  <table style="color: black;" id="myTable" class="display" style="width:100%">
    <thead>
     
      <tr id="menuClient">
        <th colspan="3">INFORMATION ENTREPRISE</th>
        <th colspan="3">CONTACT ENTREPRISE</th>
        <th colspan="2">COORDONNES</th>
      </tr>
      
      <tr>
        <th>
          Entreprise
        </th>
        <th>
          Effectifs
        </th>
        <th>
          Contact entreprise
        </th>
        <th>
          Nom
        </th>
        <th>
          Prénom
        </th>
        <th>
          Fonction occupée
        </th>
        <th>
          Tel
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
    <?php foreach ($clients as $client) { ?>
      <tr>
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
        <td>
          <label id="contact_entreprise" for="contact_entreprise" class="control-label">
            <?php echo $client['client_contact_entreprise']; ?>
          </label>
          <input type="hidden" class="edit-input1" />
        </td>
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
          <label id="fonction_occupee" for="fonction_occupee" class="control-label">
            <?php echo $client['client_fonction_occupee']; ?>
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




