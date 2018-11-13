<br><br>
<h1>PARTENAIRES</h1>
<br><br>

<a id="btn_add" class="btn btn-default">
  Ajouter un partenaire
</a>
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
                <input type="text" class="form-control" name="entreprise_modal" id="entreprise_modal" placeholder="Entreprise">
              </div>
              <div class="form-group">
                <label for="activite"><span class="glyphicon glyphicon-user"></span></label>
                <input type="text" class="form-control" name="activite_modal" id="activite_modal" placeholder="Activité">
              </div>
              <div class="form-group">
                <label for="departement_soucripteur"><span class="glyphicon glyphicon-user"></span>Departement soucripteur</label>
                <select>
                  <option value="horus_paris">Horus paris</option>
                  <option value="horus_corporate">Horus corporate</option>
                  <option value="kework">Kework</option>
                </select>
              </div>
            <h5>COORDONNES</h5>
              <div class="form-group">
                <label for="nom"><span class="glyphicon glyphicon-eye-open"></span></label>
                <input type="text" class="form-control" name="nom_modal" id="nom_modal" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="tel"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="tel_modal" id="tel_modal" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="portable"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="portable_modal" id="portable_modal" placeholder="Portable">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="email_modal" id="email_modal" placeholder="E-mail">
              </div>
              <!--
              <div class="form-group">
                <label for="xxxxx"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="_modal" id="xxxxx_modal" placeholder="xxxxx">
              </div>
              -->
            <h5>CHIFRES / HISTORIQUE</h5>
              <div class="form-group">
                <label for="ca"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="ca_modal" id="ca_modal" placeholder="CA">
              </div>
              <div class="form-group">
                <label for="historique"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <textarea cols="40" rows="5" class="form-control" name="historique_modal" id="historique_modal" placeholder="Historique"></textarea>
              </div>
            <h5>INFO CONTRAT</h5>
              <div class="form-group">
                <label for="tip_contrat"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="text" class="form-control" name="tip_contrat_modal" id="tip_contrat_modal" placeholder="Tipopologie du contrat">
              </div>
              <div class="form-group">
                <label for="debut_contrat"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" class="form-control" name="debut_contrat_modal" id="debut_contrat_modal" placeholder="Debut contrat" value="" min="" max="">
              </div>
              <div class="form-group">
                <label for="fin_contrat"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <input type="date" class="form-control" name="fin_contrat_modal" id="fin_contrat_modal" placeholder="Fin contrat" value="" min="" max="">
              </div>
            <button type="submit" id="submit_button" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {   
    $('#submit_button').on('click',function (e){
      $.ajax({
        type:'POST',
        dataType: 'json',
        success: function(data) {
            alert('success',data);

        },
        error:function(exception){alert('Exeption:'+exception);}
      }); 
      e.preventDefault();
    });
  });
</script>

<!-- Table -->
<div class="table-responsive">
  <h1>
    <?php //echo $_POST['entreprise_modal']; ?>
  </h1>
  <table style="color: black;" id="myTable" class="display" style="width:100%">
    <thead>
      
      <tr class="menuPrincipalTab">
        <th colspan="3">INFORMATION PARTENAIRE</th>
        <th colspan="4">COORDONNES</th>
        <th colspan="2">CHIFRES / HISTORIQUE</th>
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