<html>

  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
  <div class="container">
  <div class="row">
    <div class="collapse navbar-collapse" id="menu">
      <?php if(isset($_SESSION['connecte'])) { ?>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">DEV & RELATION CLIENTS <b class="caret"></b></a>
          <ul class="dropdown-menu">
             <li><a href="prospClient">PROSPECTION CLIENT</a></li>
             <li><a href="#">PROJETS CLIENTS</a></li>
             <li><a href="#" title="Facturation - Contrats - Contacts - Coordonnées">FACTURATION </a></li>
             <li><a href="#">CONTRATS</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">PARTENERS <b class="caret"></b></a>
          <ul class="dropdown-menu">
          </ul>
        </li>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">REGISTRES INTERNES <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="rh" title="Registre du personnel - Calendrier - Identité - Tableau salaires...">RH</a></li>
            <li><a href="#" title="Banques - Contrats - Historique - Procédure - Factures">COMPTABLITE</a></li>
            <li><a href="#">JURIDIQUE</a></li>
            <li><a href="#">COMMUNITY</a></li>
            <li><a href="#">AUTRE</a></li>
            <li><a href="#">LOGISTIQUE</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">MOI <b class="caret"></b></a>
          <ul class="dropdown-menu">
             <li><a href="#" title="Lien 1">Profil</a></li>
             <li><a href="register">Inscire un nouveau utilisateur</a></li>
             <li><a href="logout">Se déconnecter</a></li>
          </ul>
          <a href="admin">Home</a>
        </li>
      </ul>
      
      <?php } else { ?>
      <li><a class="se_connecter" href="login"><button type="button" class="btn btn-primary">Se connecter</button></a></li>
      <?php } ?>
    </div>
  </div>
</div>

        <?php 
            echo $content;
        ?>
        <footer> 
        </footer>

    <script src="scripts/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="DataTables/datatables.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         
         
<!--         DataTable-->
         <script type="text/javascript">
                $(document).ready( function () {
                    $('#myTable').DataTable();
                } );
         </script>
         
<!--         Modal-->
         <script>
                $(document).ready(function(){
                    $("#btn_edit").click(function(){
                        $("#myModal").modal();
                    });
                });
         </script>
    
<!--        Delete user-->
         <script type="text/javascript">
            $(document).ready(function() {delete_user()});
         </script>
         
    </body>
<html>