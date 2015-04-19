<!DOCTYPE html>
<html>
    <head>
        <title>TP Minichat</title>
        <meta charset="utf-8" />
    </head>
 
        <body>  
               <form action="minichat_post.php" method="post">
                   <p><label> Pseudo <input type="text" name="pseudo"> </label></p> 
                   <p><label> Message <input type="text" name="message"> </label></p> 
                   <input type="submit" value="Envoyer">
             </form>
             <p>Historique : </p>
             <br />
             <?php
             try{              
                    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  

                } catch (Exception $e){
                    die ('Erreur : ' .$e->getMessaage());
                }
              $requete = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');

               while($messages = $requete->fetch()) 
               {
                    echo  htmlspecialchars($messages['pseudo'] ). ' : ' . htmlspecialchars($messages['message']) . '<br />';
               } 
              $requete->closeCursor(); 
             ?>
        </body>
  
</html>