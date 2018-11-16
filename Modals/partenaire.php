<!-- Modal edit-->

<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $partener['partener_id'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer un partenaire</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="partenaire_delete" role="form" method="POST">
         <p>You are deleting the partener "<?= $partener['partener_entreprise'] ?>"!</p>
         <button type="submit" name="partenaire_delete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
</div>