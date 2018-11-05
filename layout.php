<html>

  <head>
     <title></title>
     
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" type="text/css" href="css/style.css">
     
  </head>

  <body>
    <header>	
        <nav class="menu">
             <?php if(isset($_SESSION['connecte']))
             { ?> 
			 
          <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> SUIVI / RELATION CLIENTS<span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
             <li><a href="#">PROSPECTION CLIENT</a></li>
             <li><a href="#">PROJETS CLIENTS</a></li>
             <li><a href="#" title="Facturation - Contrats - Contacts - Coordonnées">FACTURATION </a></li>
             <li><a href="#">CONTRATS</a></li>
          </ul>
        </div>
        
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> REGISTRES INTERNES <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
             <li><a href="#" title="Registre du personnel - Calendrier - Identité - Tableau salaires...">RH</a></li>
             <li><a href="#" title="Banques - Contrats - Historique - Procédure - Factures">COMPTABLITE</a></li>
             <li><a href="#">JURIDIQUE</a></li>
          </ul>
        </div>
        
        <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> MOI <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
             <li><a href="#" title="Lien 1">Profil</a></li>
             <li><a href="register">Inscire un nouveau utilisateur</a></li>
             <li><a href="logout">Se déconnecter</a></li>
          </ul>
        </div>
			  
             <?php } else { ?>
             <li><a href="login">Se connecter</a></li>	
             <?php } ?>
            
        </nav>
        
        
        
    </header>
        <?php 
            echo $content;
        ?>
        <footer> 
        </footer>
    </body>
<html>	