<html>

  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
  </head>

  <body>
<div id="app" class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <?php if(isset($_SESSION['connecte'])) { ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="admin">HOME</a>
              </li>
            </ul>
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
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="partenaire">PARTENAIRES</a>
              </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">REGISTRES INTERNES <b class="caret"></b></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-item"><a href="rh" title="Registre du personnel - Calendrier - Identité - Tableau salaires...">RH</a></li>
                    <li class="dropdown-item"><a href="comptabilite" title="Banques - Contrats - Historique - Procédure - Factures">COMPTABLITE</a></li>
                    <li class="dropdown-item"><a href="#">JURIDIQUE</a></li>
                    <li class="dropdown-item"><a href="#">COMMUNITY</a></li>
                    <li class="dropdown-item"><a href="#">AUTRE</a></li>
                    <li class="dropdown-item"><a href="#">LOGISTIQUE</a></li>
                  </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MOI <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li class="dropdown-item"><a href="#" title="Lien 1">Profil</a></li>
                     <li class="dropdown-item"><a href="register">Inscire un nouveau utilisateur</a></li>
                     <li class="dropdown-item"><a href="logout">Se déconnecter</a></li>
                  </ul>
                </li>
            </ul>
            <?php } ?>
        </div>
    </nav>
</div>

        <?php 
            echo $content;
        ?>
        <footer> 
        </footer>
    
<!--    Library import-->
         
         

    <script type="text/javascript">
             
         // DataTable
            $(document).ready(function() {
                $('table.display').DataTable({
                    "pagingType": "full_numbers"
                });
            });
         
         // Modal edit
            $(document).ready(function(){
                $("#btn_edit").click(function(){
                    $("#myModal_edit_rh").modal();
                    $("#myModal_edit_client").modal();
                });
            });
         
         // Modal add 
            $(document).ready(function(){
                $("#btn_add").click(function(){
                    $("#myModal_add_rh").modal();
                    $("#myModal_add_partenaire").modal();
                    $("#myModal_add_client").modal();
                });
            });

         // Modal detail
            $(document).ready(function(){
                $("#show_detail").click(function(){
                    $("#myModal_detailClient").modal();
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