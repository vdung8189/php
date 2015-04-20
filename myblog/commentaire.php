<!DOCTYPE html>
<html>
    <head>
        <title>Commentaires</title>
        <meta charset="utf-8" />
         <style type="text/css" media="all"> 
            @import "./style.css"; 
         </style> 
    </head>
   
        
        <body>  
         <h1>Commentaire</h1> 

        <?php
          try{
            $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

          } catch(Exception $e){
              die('Erreur :' . $e->getMessage());
          }
          $requete = $bdd->prepare('SELECT  auteur, commentaire, date_commentaire FROM commentaires WHERE id_billet = ? ORDER BY ID DESC  ');
          $requete->execute(array($_GET['id_billet']));

          while ($commentaires = $requete->fetch())
          {
            echo $commentaires['auteur'] . ' le ' . $commentaires['date_commentaire'] . '<br />';
            echo $commentaires['commentaire'] . '<br/>';
          }

         ?>         
         
        </body>
  
</html>