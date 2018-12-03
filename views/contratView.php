<br>

<h2>CONTRAT</h2>
<br><br><br>

<a href="#" id="btn_add" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="">Ajouter un contrat</a>

<br><br><br>


<!-- BEGIN # MODAL ADD -->
<!-- Modal add-->
<div class="modal fade" id="myModal_add_contrat" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Ajouter un contrat</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form method="POST" id="client_edit" role="form" enctype="multipart/form-data">
            <h5>- NOM DU CONTRAT -</h5>
              <div class="form-group">
                <label for="login"><span class="glyphicon glyphicon-user"></span> </label>
                <!-- <input type="text" class="form-control" id="login" placeholder="Entreprise"> -->
                <input name="nom" type="text" class="form-control" id="login" placeholder="Nom">
              </div>
              <div class="form-group">
                <label>Upload : </label>
                <input type="file" name="file"> 
              </div>
                <input name="contratadd" type="submit" class="btn btn-success btn-block" value="Valider">
        </form>    
      </div>
    </div>
  </div>
</div>
<!-- END # MODAL ADD -->



<!--Table-->
<div class="table-responsive">
    <table id="contratTable" class="contratTable" style="width:100%">
        <thead>
            <tr>
                <th>
                    Nom du contrat
                </th>
                <th>
                    Date
                </th>
                <th>
                    Lien
                </th>
                <th>
                    Modifier
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($contrats as $contrat)
            {   ?>
                <tr>
                    <td id="show_detail">
                            <?php echo $contrat['nom_contrat']; ?>
                    </td>
                    <td>
                           <?php echo $contrat['date_contrat']; ?>
                    </td>
                    <td>
                        <a href="uploaded/<?= $contrat['lien']?>" > <?= $contrat['lien'] ?> </a>
                    </td>
                    <td>
                        <div class="edit">
                            <a href="#edit_<?php echo $contrat['id_contrat']; ?>" data-toggle="modal" class="btn btn-default"> 
                                <i id="edit" class="fa fa-pencil fa-lg"> </i>
                            </a>
                            <a href="#delete_<?= $contrat['id_contrat'] ?>" data-toggle="modal" class="btn btn-default">
                                <i id="delete" class="fa fa-trash fa-lg remove-item "> </i>
                            </a>
                        </div>
                    </td>
                    <?php include ('Modals/contrat.php') ?>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
    