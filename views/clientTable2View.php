<div class="comptabiliteContainer">
     <h3><?= $tableName ?></h3>


<a href="#" id="btn_add_kework" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter un client</a>
<br><br><br>

<!-- BEGIN # MODAL ADD -->
<!-- Modal add-->
<div class="modal fade" id="myModal_add_client_kework" role="dialog">
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
                <!-- <input type="text" class="form-control" id="login" placeholder="Entreprise"> -->
                <input name="entreprise" type="text" class="form-control" id="login" placeholder="Entreprise">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <!-- <input type="text" class="form-control" id="email" placeholder="Effectifs"> -->
                <input name="effectif" type="text" class="form-control" id="email" placeholder="Effectifs">
              </div>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <!-- <input type="text" class="form-control" id="email" placeholder="Effectifs"> -->
                <input name="superficie" type="text" class="form-control" id="email" placeholder="Superficie">
              </div>
            <h5>- ACTIVITE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
                <select name="activite">
                  <option value="CAC 40">CAC 40</option>
                  <option value="Coworking">Coworking</option>
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
                  <option value="A definir">A definir</option>
                </select>
              </div>
            <h5>- CONTACT ENTREPRISE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <!-- <input type="text" class="form-control" id="pass" placeholder="Nom"> -->
                <input name="nom" type="text" class="form-control" id="pass" placeholder="Nom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <!-- <input type="text" class="form-control" id="pass" placeholder="Prénom"> -->
                <input name="prenom" type="text" class="form-control" id="pass" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <!-- <input type="text" class="form-control" id="pass" placeholder="Prénom"> -->
                <input name="fonction" type="text" class="form-control" id="pass" placeholder="Fonction">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <!-- <input type="text" class="form-control" id="pass" placeholder="Téléphone"> -->
                <input name="tel" type="text" class="form-control" id="pass" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <!-- <input type="text" class="form-control" id="pass" placeholder="Email"> -->
                <input name="email" type="text" class="form-control" id="pass" placeholder="Email">
              </div>
            <h5>- SUIVI CLIENT -</h5>
              <div class="form-group">
                <select name="suivi">
                  <option value="En negociation">Client en négociation</option>
                  <option value="Pas interesse">Client pas interessé</option>
                  <option value="A prospecter">A prospecter</option>
                  <option value="Sous contrat">Sous contrat</option>
                </select>
              </div>
                <!-- <button type="submit" class="btn btn-success btn-block">Valider</button> -->
                <input name="clientadd_kework" type="submit" class="btn btn-success btn-block" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->


<!--Table 1-->
<div class="table-responsive">
  <table id="myTable" class="table table-bordered display" style="width:100%">
    <thead>
     
      <tr>
        <th colspan="1"></th>
        <th colspan="5">INFORMATION ENTREPRISE</th>
        <th colspan="1"></th>
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
          Superficie
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
          Statut
        </th>
        <th>
          Modifier
        </th>
      </tr>
    </thead>
    <tbody>
    <?php $clients = get_client(); ?>
    <?php foreach ($clients as $client) { ?>
    <?php if($client['entreprise'] == "Kework") { ?>
      <tr>
       <td>
           <?php if($client['pertinance'] == '1') { ?>
           <i class="fa fa-exclamation-circle fa-2x"></i>
           <?php } ?>
       </td>
        <td>
         <a href="#detail_<?php echo $client['client_id']; ?>" data-toggle="modal" class="btn btn-default">
            <?php echo $client['client_entreprise']; ?>
         </a>
          <input type="hidden" name="client_id" id="client_id" value="<?= $client['client_id'] ?>"/>
        </td>
        <td>
            <?php echo $client['client_effectif']; ?>
        </td>
        <td>
            <?php echo $client['client_superficie']; ?>
        </td>
        <td>
            <?php echo $client['client_menu_famille']; ?>
        </td>
        <td>
            <?php echo $client['client_fonction_occupee']; ?>
        </td>
        <td id="show_contract_detail">
            <?php echo $client['client_services']; ?>
        </td>
        <td>
            <?php echo $client['client_suivi']; ?>
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
    <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <th>
              
            </th>
            <th>
              
            </th>
            <th>
              Effectif
            </th>
            <th>
              
            </th>
            <th>
              Activité
            </th>
            <th>
              Département acheteur
            </th>
            <th>
              
            </th>
            <th>
              Statut
            </th>
            <th>
              
            </th>
        </tr>
        </tfoot>
  </table>
</div>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
                $("#btn_add_kework").click(function(){
                    $("#myModal_add_client_kework").modal();
                });
            });
</script>
