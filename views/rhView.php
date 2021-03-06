<br><br>
<h1>REGISTRE UNIQUE DU PERSONNEL</h1>

<br><br>
    
    <a id="btn_add" class="btn btn-default" data-target="#myModal_add_rh"> 
        Ajouter un collaborateur
    </a>
    
<br><br>

<!-- Modal detail-->
<div class="modal fade higherWider" id="myModal_detailRH" role="dialog">
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
                       <th colspan="4">ACCES A L'INTERFACE</th>
                   </tr>
                   <tr id="modal_sous_menu_detail">
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
                <?php foreach ($users as $user) { ?>
              <tr>
                <td>
                  <label id="nom" for="nom" class="control-label">
                    <?php echo $user['user_login']; ?>
                  </label>
                  <input type="hidden" class="edit-input1" />
                </td>
                <td>
                  <label id="prenom" for="prenom" class="control-label">
                    <?php echo $user['user_email']; ?>
                  </label>
                  <input type="hidden" class="edit-input1" />
                </td>
                <td>
                  <label id="tel" for="tel" class="control-label">
                    <?php echo $user['user_pass']; ?>
                  </label>
                  <input type="hidden" class="edit-input1" />
                </td>
                <td>
                    <div class="edit">
                        <a id="<?php echo $user["user_id"]; ?>" class="btn btn-default edit_test"> 
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
      </div>
    </div>
  </div>
</div>

<!-- Modal add -->
  <div class="modal fade" id="myModal_add_rh" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Ajouter un collaborateur</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         
          <form data-toggle="validator" id="rh_add" action="" method="POST">
            <h5>- IDENTITE -</h5>
            <div class="form-group">
              <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
            </div>
            <div class="form-group">
              <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom">
            </div>
            <div class="form-group">
              <input type="date" name="naissance" class="form-control" id="naissance" placeholder="Date de naissance">
            </div>
            <div class="form-group">
              <input type="text" name="ss" class="form-control" id="ss" placeholder="Sécurité sociale">
            </div>
            <h5>- COORDONNES -</h5>
            <div class="form-group">
              <input type="text" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" name="tel" class="form-control" id="tel" placeholder="Telephone">
            </div>
            <div class="form-group">
              <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse">
            </div>
            <h5>- POSTE ENTREPRISE -</h5>
            <div class="form-group">
              <input type="text" name="poste" class="form-control" id="poste" placeholder="Poste">
            </div>
            <div class="form-group">
              <input type="date" name="date_entree" class="form-control" id="date_entree" placeholder="Date entrée entreprise">
            </div>
            <div class="form-group">
              <input type="date" name="date_sortie" class="form-control" id="date_sortie" placeholder="Date sortie entreprise">
            </div>
            <h5>- MANAGER INTERNE -</h5>
            <div class="form-group">
              <input type="text" name="departement" class="form-control" id="departement" placeholder="Département">
            </div>
            <div class="form-group">
              <h5>- ACCES USER -</h5>
              <select name="access_interface">
                  <option value="1">Oui</option>
                  <option value="0" selected>Non</option>
              </select>
            </div>
              <button name="rhadd" type="submit" class="btn btn-success btn-block ">Valider</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
  
  
<!-- Modal edit -->
  <div class="modal fade" id="myModal_edit_rh" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Modifier un employeur</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="colla_add" role="form">
            <h5>- IDENTITE -</h5>
            <div class="form-group">
              <label for="login"><span class="glyphicon glyphicon-user"></span></label>
              <input type="text" class="form-control" id="login" placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span></label>
              <input type="text" class="form-control" id="email" placeholder="Prenom">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
              <input type="text" class="form-control" id="pass" placeholder="Date de naissance">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
              <input type="text" class="form-control" id="pass" placeholder="Sécurité sociale">
            </div>
            <h5>- COORDONNES -</h5>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span></label>
              <input type="text" class="form-control" id="pass" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" class="form-control" id="pass" placeholder="Telephone">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" class="form-control" id="pass" placeholder="Adresse">
            </div>
            <h5>- POSTE ENTREPRISE -</h5>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" class="form-control" id="pass" placeholder="Poste">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" class="form-control" id="pass" placeholder="Date entrée entreprise">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" class="form-control" id="pass" placeholder="Date sortie entreprise">
            </div>
            <h5>- MANAGER INTERNE -</h5>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" class="form-control" id="pass" placeholder="Département">
            </div>
            <div class="form-group">
              <label for="pass"><span class="glyphicon glyphicon-eye-open"></span> </label>
              <input type="text" class="form-control" id="pass" placeholder="Accès user">
            </div>
              <input type="hidden" name="employee_id" id="client_id" /> 
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
           <tr class="menuPrincipalTab">
              <th colspan="4">IDENTITE</th>
              <th colspan="3">COORDONNEES</th>
              <th colspan="3">POSTE ENTREPRISE</th>
              <th colspan="2">MANAGER INTERNE</th>
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
                <th>
                    Modifier
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($employeur as $emp)
            {   ?>
                <tr>
                    <td id="show_detail">
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
                           <a id="btn_edit" class="btn btn-default "> 
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


