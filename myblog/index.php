<!DOCTYPE html>
<html>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
        <style type="text/css" media="all"> 
            @import "./style.css"; 
        </style>    
    </head>
      

        <body>  
         <h1>Mon super blog!</h1> 

          <p>Derniers billets du blog</p>

        <?php

          try{
            $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

          } catch(Exception $e){
              die('Erreur :' . $e->getMessage());
          }
          // récupérer les billets
          $requete = $bdd->query('SELECT id, titre, contenu, date_creation FROM billets ORDER BY ID DESC LIMIT 0,5 ');
          while ($billets = $requete->fetch())
          {
            echo '<h3>' . $billets['titre'] .' le '. $billets['date_creation']. '</h3>  ';
            echo  '<p>'. $billets['contenu'] .'</p>';
            echo '<a href="commentaire.php?id_billet='.$billets['id'] .'">'.'commentaires</a>';
          }

         ?>         
         
        </body>
  
</html>