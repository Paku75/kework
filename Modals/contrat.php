



<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $contrat['id_contrat'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un contrat</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="client_delete" role="form" method="POST">
         <p style="color:white;">Voulez-vous supprimer "<?= $contrat['nom_contrat'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $contrat['id_contrat'] ?>">
         <button type="submit" name="contrat_delete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div> 