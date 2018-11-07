
<h1>Liste des employeurs</h1>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Modifier l'employee</h4>
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
    <table id="myTable" class="table table-bordered display" style="width:100%">
        <thead>
            <tr>
              <th colspan="4">Identité</th>
              <th colspan="3">Cordoneés</th>
              <th colspan="3">Poste entreprise</th>
              <th colspan="2">Manager interne</th>
            </tr>
            <tr>
                <th>
                    Nom
                </th>
                <th>
                    Prenom
                </th>
                <th>
                    Date de naissance
                </th>
                <th>
                    Sécurité sociale
                </th>
                <th>
                    Email
                </th>
                <th>
                    Telephone
                </th>
                <th>
                    Adresse
                </th>
                <th>
                    Poste 
                </th>
                <th>
                    Date entrée entreprise
                </th>
                <th>
                    Date sortie entreprise
                </th>
                <th>
                    Département
                </th>
                <th>
                    Acces user
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($employeur as $emp)
            {   ?>
                <tr>
                    <td>
                        <label id="nom" for="nom" class="control-label">
                            <?php echo $emp['nom']; ?>
                        </label>
                        <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="prenom" for="prenom" class="control-label">
                           <?php echo $emp['prenom']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['date_de_naissance']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['n_ss']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['email']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['telephone']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['addresse']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['poste_occupee']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['date_entree_entreprise']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['date_sortie_entreprise']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['departement_ratache']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $emp['access_departement']; ?>
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

