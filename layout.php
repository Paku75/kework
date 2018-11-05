<html>

  <head>
     <title></title>
  </head>

  <body>
				
        <nav>
             <?php if(isset($_SESSION['connecte']))
             { ?> 
			 <ul> 
                <li><a href="">Suivi / relation clients</a></li>			 
                <li><a href="">Registres internes</a></li>
                <li><a href="logout">Se déconnecter</a></li>	
			  
             <?php } else { ?>
             <li><a href="login">Se connecter</a></li>
             <li><a href="registerView">S'inscrire</a></li>	
             <?php } ?>
            </ul>
        </nav>
        <?php 
            echo $content;
        ?>
        <footer> 
        </footer>
    </body>
<html>	