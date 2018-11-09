<h1>Liste des utilisateurs</h1>


<!-- Modal -->
  <div class="modal fade" id="myModal_edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Modifier user</h4>
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
    <table style="color: black;" id="myTable" class="table table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>
                    Login
                </th>
                <th>
                    Email
                </th>
                <th>
                    Mot de passe
                </th>
                <th>
                    Modifier
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($users as $user)
            {   ?>
                <tr>
                    <td>
                        <label id="login" for="login" class="control-label">
                            <?php echo $user['user_login']; ?>
                        </label>
                        <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="email" for="email" class="control-label">
                           <?php echo $user['user_email']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $user['user_pass']; ?>
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
      <?php }
        ?>
        </tbody>
    </table>
</div>