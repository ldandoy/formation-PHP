<?php
	session_name('Private');
	session_start();

	require_once 'common.php';

	if (isset($_POST['send'])) {
		if ($_POST['login'] != "" && $_POST['pwd'] != "") {
			if (verif($_POST)) {
				header("Location: private.php");
			} else {
				$msg = "Login ou mot de passe incorrecte";
			}
		} else {
			$msg = "Vous devez remplir tous les champs";
		}
	}
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1>Connection à votre espace privé</h1>
		<?php if (isset($msg)) { echo $msg; } ?>
		<form action="" method="post">
			<label for="login">Login</label> <input id="login" type="text" name="login" required /><br />
			<label for="pwd">Mot  de passe</label> <input id="pwd" type="password" name="pwd" required /><br />
			<input type="submit" name="send" value="Connection" />
		</form>
	</body>
</html>