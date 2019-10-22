<?php
	session_name('Private');
	session_start();
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<?php $_SESSION['name'] = "Bastien"; ?>
		<a href="private.php">Accéder à la partie privée</a>
	</body>
</html>