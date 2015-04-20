<?php
	if (isset($_GET['console']) AND isset($_GET['possesseur']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		//$requete = $bdd->prepare('INSERT INTO jeux_video(nom, posseseur) VALUES(?,?)');
		$requete = $bdd->prepare('SELECT ?,? FROM jeux_video');			
		$requete->execute(array($_GET['console'], $_GET['posseseur']));
		while ($donnees = $requete->fetch()) {
			# code...
			echo '<p>'.$donnees['console'].' ' . $donnees['possesseur'] .'</p>';
		}		
	}
?>