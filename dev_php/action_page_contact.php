<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../dev_css/styles_action_contactPHP.css">
</head>
<body>

	<?php
	$now  = new DateTime;
	$nownow = $now->format( 'd-m-Y H:i:s' );
	if ( isset($_POST) && !empty($_POST['email_exp']) &&  !empty($_POST['subject_exp']) && !empty($_POST['message_exp'])) {
		extract($_POST);
		try
		{
			
			$bdd = new PDO('pgsql:host=localhost;dbname=arbaoui', 'youraccount',                                                                                                                              'secret');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		$requete = "INSERT INTO mail  VALUES('$nownow', '$email_exp','$subject_exp','$message_exp' ) ";
		/*echo $requete; */
		$present = $bdd->prepare($requete);
		$present -> execute();
		echo " Envois reussi ! "."<br>" ;
	}
	else echo "Veuillez remplir tout les cases ! :) ";
	echo $now->format( 'd-m-Y H:i:s' );
	echo '<form method="get" action="http://webtp.fil.univ-lille1.fr/~arbaoui/main.html">
		<button class="btn" type="submit">Home Page</button>
		</form>' ;
		?>

	</body>
	</html>
