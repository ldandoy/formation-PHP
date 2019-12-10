<?php
	if (isset($_POST['send'])) {
		/* Connect to a MySQL database using driver invocation */
		$dsn 		= 'mysql:dbname=site;host=127.0.0.1';
		$user 		= 'root';
		$password 	= 'root';

		try {
		    $dbh = new PDO($dsn, $user, $password);
		    $sql = "INSERT INTO news (id, title, content) VALUES (null, :title, :content);";
		    $sth = $dbh->prepare($sql);
		    $sth->execute(array(
		    	'title' 	=> $_POST['title'],
		    	'content' 	=> $_POST['content'],
		    ));
		    header('Location: news.php');

		} catch (PDOException $e) {
		    echo 'Connection failed: ' . $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html>
	<?php include 'header.php'; ?>
	<body>
		<?php include 'nav.php'; ?>
		<div class="container">
			<h1>Ajouter une new</h1>
			<form action="" method="post">
				<label>Titre de la new</label>
				<br />
				<input type="text" class="form" name="title" />
				<br />
				<label>Contenue de la new</label>
				<br />
				<textarea class="form" rows="15" name="content"></textarea>
				<br />
				<input type="submit" name="send" />
			</form>
			<p><a href="news.php">Retour aux news</a></p>
		</div>
	</body>
</html>