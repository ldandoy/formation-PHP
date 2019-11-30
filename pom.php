<?php
	session_start();

	if ( !isset($_SESSION['chiffre']) ) {
		$_SESSION['chiffre'] = rand(0, 100);
	}

	if ( !isset($_SESSION['essai']) ) {
		$_SESSION['essai'] = 1;
	}	
	// echo $_SESSION['chiffre'];
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Le Jeu du plus ou moins</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<h1>Le Jeu du plus ou moins</h1>

		<?php
			// print_r($_POST);
			if (isset($_POST['send'])) {
				// echo "Formulaire envoyé";
				if ($_POST['secret'] > $_SESSION['chiffre']) {
					echo "Le chiffre a trouvé est plus petit.";
					$_SESSION['essai'] = $_SESSION['essai'] + 1;
				} elseif ($_POST['secret'] < $_SESSION['chiffre']) {
					echo "Le chiffre a trouvé est plus grand.";
					$_SESSION['essai'] = $_SESSION['essai'] + 1;
				} else {
					echo "Vous avez gagné en " . $_SESSION['essai'] . " essai(s) !";
					$_SESSION['chiffre'] = rand(0, 100);
					$_SESSION['essai'] = 1;
				}
			}
		?>

		<form action="" method="POST">
			<label>Entrez un nombre:</label><br />
			<input type="text" name="secret" /><br />
			<input type="submit" value="Envoyer" name="send" />
		</form>
	</body>
</html>