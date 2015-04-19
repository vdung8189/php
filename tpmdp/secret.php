<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>  
     <?php
        $mdp = $_POST['password'];
        if ($mdp == "test"){
            echo "voilà la page secrete";
        } else {
            echo "Null";
        }
     ?>	
    </body>
</html>