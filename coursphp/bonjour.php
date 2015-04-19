<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>    
      <p> 
      	 <?php
      	  if (isset($_GET['nom'] ) AND isset($_GET['prenom']) AND isset($_GET['repeter'])) 
      	  {
      	  		$nbRepetition = (int) $_GET['repeter'];
      	  		if($nbRepetition < 100 and $nbRepetition >= 1 ){

		      	  		for($repetition = 0; $repetition <= $nbRepetition ; $repetition ++)
		        		{
		        			echo ' <p>Bonjour ' . $_GET['nom'] .' '. $_GET['prenom'] . '</p>';
		        		}	

      	  		} else if($nbRepetition < 1){
      	  			echo ' <p>Bonjour ' . $_GET['nom'] .' '. $_GET['prenom'] . '</p>';
      	  		} else{
      	  				echo 'Nombre de répétition trop grand';
      	  		}

        		
        		
    	   } else {
    					echo 'Pas de nom et prénom défini';
    			  }

         ?> 
       </p>
    </body>
</html>