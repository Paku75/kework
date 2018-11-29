<!-- Modal detail-->
<div class="modal fade" id="detail_<?php echo $client['client_id']; ?>" role="dialog">
  <div class="modal-dialog modal-lg" id="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class=""></span>Détail pour <?= $client['client_entreprise']?></h4>
        <a href="#edit_detail_<?php echo $client['client_id']; ?>" data-toggle="modal" class="btn btn-default">
                    <i id="edit" class="fa fa-pencil fa-lg"> </i>
        </a>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
                      <h5>-- COORDONNES --</h5>
                       <p>
                         <u>NOM</u> : <?= $client['client_nom']; ?>
                      </p>
                       <p>
                         <u>PRENOM</u> : <?= $client['client_prenom']; ?>
                      </p>
                       <p>
                         <u>FONCTION</u> : <?= $client['client_fonction']; ?>
                      </p>
                       <p>
                         <u>TEL</u> : <?= $client['client_tel']; ?>
                      </p>
                       <p>
                         <u>EMAIL</u> : <?= $client['client_email']; ?>
                      </p>
                     <h5>-- HISTORIQUE --</h5>
                       <p>
                         <u>DATE</u> : <?= $client['client_date']; ?>
                      </p>
                        <label id="historique" for="historique" class="control-label">
                        <?php echo $client['client_historique']; ?>
                        </label>
      </div>
    </div>
  </div>
</div>

<!--Modal detail edit-->
<div class="modal fade" id="edit_detail_<?php echo $client['client_id']; ?>" role="dialog">
  <div class="modal-dialog modal-lg" id="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class=""></span>Modifier les détails pour <?= $client['client_entreprise']?></h4>
        <a href="#edit_detail_<?php echo $client['client_id']; ?>" data-toggle="modal" class="btn btn-default">
            <i id="edit" class="fa fa-pencil fa-lg"> </i>
        </a>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
                    <form method="post">
                      <h5>-- COORDONNES --</h5>
                      <div class="form-group">
                        <input type="hidden" name="client_id" value="<?= $client['client_id'] ?>">
                        <input type="text" name="nom" class="form-control" value="<?= $client['client_nom'] ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" name="prenom" class="form-control" value="<?= $client['client_prenom'] ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" name="fonction" class="form-control" value="<?= $client['client_fonction'] ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" name="tel" class="form-control" value="<?= $client['client_tel'] ?>">
                      </div>
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" value="<?= $client['client_email'] ?>">
                      </div>
                      <h5>-- HISTORIQUE --</h5>
                      <div class="form-group">
                        <input type="text" name="historique" class="form-control" value="<?= $client['client_historique'] ?>">
                      </div>
                        <button type="submit" name="detail_client_edit" class="btn btn-success btn-block">Valider</button>
                    </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal edit-->
<div class="modal fade" id="edit_<?php echo $client['client_id']; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Modifier le client</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="client_edit" role="form">
            <h5>- INFORMATION ENTREPRISE -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="hidden" name="client_id" value="<?= $client['client_id'] ?>">
                <input type="text" name="entreprise" class="form-control" id="login" placeholder="Entreprise" value="<?= $client['client_entreprise'] ?>">
              </div>
            <h5>- EFFECTIF -</h5>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" name="effectif" class="form-control" id="email" placeholder="Effectifs" value="<?= $client['client_effectif'] ?>">
              </div>
            <h5>- SUPERFICIE -</h5>
              <div class="form-group">
                <label for="email"><span class="glyphicon glyphicon-user"></span> </label>
                <input type="text" name="superficie" class="form-control" id="email" placeholder="Superficie" value="<?= $client['client_superficie'] ?>">
              </div>
            <h5>- ACTIVITE -</h5>
              <div class="form-group">
                <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
                <select name="activite">
                    <option>CAC 40</option>
                    <option>Coworking</option>
                    <option>RELA estate</option>
                    <option>Banque</option>
                    <option>Cabinets avocats</option>
                    <option>Family office</option>
                </select>
              </div>
            <h5>- DEPARTEMENT ACHETEUR -</h5>
              <div class="form-group">
                <select name="departement">
                    <option>Services generaux</option>
                    <option>Achats</option>
                    <option>Commercials</option>
                    <option>Conseils</option>
                    <option>A definir</option>
                </select>
              </div>
            <h5>- SUIVI CLIENT -</h5>
              <div class="form-group">
                <select name="suivi">
                    <option>Client en négociation</option>
                    <option>Client pas interessé</option>
                    <option>A prospecter</option>
                    <option>Sous contrat</option>
                </select>
              </div>
            <h5>- SERVICES INSTALLES -</h5>
              <div class="form-group">
                <label style="color:white;" for="case">Accueil</label> <input type="checkbox" id="case" value="Accueil" name="accueil"> 
              </div>
              <div class="form-group">
                <label style="color:white;" for="case">Conciergerie</label> <input type="checkbox" id="case" value="Conciergerie" name="conciergerie" > 
              </div>
              <div class="form-group">
                <label style="color:white;" for="case">Buisness office</label> <input type="checkbox" id="case" value="Buisness office" name="buisness" > 
              </div>
              <div class="form-group">
                <label style="color:white;" for="case">Happiness</label> <input type="checkbox" id="case" value="Happiness" name="happiness" > 
              </div>
              <div class="form-group">
                <label style="color:white;" for="case">Cowork</label> <input type="checkbox" id="case" value="Cowork" name="cowork" > 
              </div>
                <button type="submit" name="clientedit" class="btn btn-success btn-block">Valider</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $client['client_id'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un partenaire</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="client_delete" role="form" method="POST">
         <p style="color:white;">Voulez-vous supprimer "<?= $client['client_entreprise'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $client['client_id'] ?>">
         <button type="submit" name="client_delete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div>