<?php 
    require_once "models/loginModel.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
<?php if(isset($_SESSION['connecte'])) { ?>
<div id="app" class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="accueil">HOME</a>
              </li>
            </ul>
            <?php if($_SESSION['user_poste'] == 'Developpement commercial' || $_SESSION['user_level'] == '1') { ?>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DEV & RELATION CLIENTS <b class="caret"></b></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item dropdown"><a href="client">PROSPECTION CLIENT</a></li>
                    <li class="dropdown-item"><a href="#">PROJETS CLIENTS</a></li>
                    <li class="dropdown-item"><a href="#" title="Facturation - Contrats - Contacts - Coordonnées">FACTURATION </a></li>
                    <li class="dropdown-item"><a href="#">CONTRATS</a></li>
                  </ul>
                </li>
            </ul>
            <?php } ?>
            <?php if($_SESSION['user_poste'] == 'Communication presse' || $_SESSION['user_level'] == '1') { ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="partenaire">PARTENAIRES</a>
              </li>
            </ul>
            <?php } ?>
            <?php if($_SESSION['user_poste'] == 'Ressources humaines' || $_SESSION['user_level'] == '1') { ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="comptabilite">COMPTABLITE</a>
              </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">REGISTRES INTERNES <b class="caret"></b></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a href="juridique">JURIDIQUE</a></li>
                    <li class="dropdown-item"><a href="community">COMMUNITY</a></li>
                    <li class="dropdown-item"><a href="autre">AUTRE</a></li>
                    <li class="dropdown-item"><a href="logistique">LOGISTIQUE</a></li>
                  </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RESSOURCES HUMAINES <b class="caret"></b></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a href="rp" title="Registre du personnel - Calendrier - Identité - Tableau salaires...">REGISTRE UNIQUE DU PERSONNEL</a></li>
                    <li class="dropdown-item"><a href="testtables">ECOLE / PARTENAIRE</a></li>
                    <li class="dropdown-item"><a href="sr">SUIVI RECRUTEMENT</a></li>
                    <li class="dropdown-item"><a href="contrat">CONTRAT</a></li>
                  </ul>
                </li>
            </ul>
            <?php } ?>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MOI <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item"><a href="profil" title="Modifier votre profil">Profil</a></li>
                     <li class="dropdown-item"><a href="logout">Se déconnecter</a></li>
                  </ul>
                </li>
            </ul>
            <?php if($_SESSION['user_level'] == '1') { ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="register">INSCRIRE UN NOUVEL UTILISATEUR</a>
              </li>
            </ul>
            <?php } ?>
        </div>
    </nav>
</div>
            <?php } else { ?>
            <!-- <li><a class="se_connecter" href="login"><button type="button" class="btn btn-primary">Se connecter</button></a></li> -->
            
            <?php } ?>

        <?php 
            echo $content;
        ?>
        <footer> 
        </footer>
    
<!--    Library import-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script type="text/javascript" charset="utf8" src="DataTables/datatables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="Toastr/toastr.min.js"></script>
    <link rel="stylesheet" href="Toastr/toastr.min.css">
    <script src="scripts/script.js"></script>
         
         

    <script type="text/javascript">
             
         // DataTable
            $(document).ready(function() {
                $('table.display').DataTable();
            });
         
         // Modal edit
            $(document).ready(function(){
                $("#btn_edit").click(function(){
                    $("#myModal_edit_rh").modal();
                    $("#myModal_edit_client").modal();
                    $("#myModal_edit_profil").modal();
                });
            });
         
         // Modal add 
            $(document).ready(function(){
                $("#btn_add").click(function(){
//                    alert("ok");
                    $("#myModal_add_rh").modal();
                    $("#myModal_add_partenaire").modal();
                    $("#myModal_add_client_horus").modal();
                    $("#myModal_add_ep").modal();
                    $("#myModal_add_contrat").modal();
                });
                
                $("#btn_add_ep2").click(function(){
                    $("#addmodal2").modal();
                });
                
                $("#btn_add3").click(function(){
                    $("#addmodal3").modal();
                });
                
                $("#btn_add4").click(function(){
                    $("#addmodal4").modal();
                });
            });

         // Modal detail
            $(document).ready(function(){
                $("#show_detail").click(function(){
                    $("#myModal_detailRH").modal();
                });
            });

        
         // Delete user
//            $(document).ready(function(){
//                delete_user()
//            });
         
      </script>
      
    </body>
<html>