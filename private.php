<?php
	session_name('Private');
	session_start();

	if (!isset($_SESSION['name'])) {
		header("Location: login.php");
	}
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<h1>Bienvenue dans votre espace privé.</h1>
		Bonjour <?php echo $_SESSION['name']; ?><br />
		<p>
			<a href="logout.php">Déconnexion</a>
		</p>
	</body>
</html>