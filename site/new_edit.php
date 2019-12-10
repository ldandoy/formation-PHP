<?php
	/* Connect to a MySQL database using driver invocation */
	$dsn 		= 'mysql:dbname=site;host=127.0.0.1';
	$user 		= 'root';
	$password 	= 'root';

	try {
	    $dbh = new PDO($dsn, $user, $password);

	    if (isset($_POST['send'])) {
	    	$sql = "UPDATE news SET title = :title, content = :content WHERE id = :id";
		    $sth = $dbh->prepare($sql);
		    $sth->execute(array(
		    	'id' 		=> $_GET['id'],
		    	'title' 	=> $_POST['title'],
		    	'content' 	=> $_POST['content'],
		    ));
	    }

	    $sql = "SELECT * FROM news WHERE id = :id";
	    $sth = $dbh->prepare($sql);
	    $sth->execute(array(
	    	'id' => $_GET['id']
	    ));
	    $new = $sth->fetch(PDO::FETCH_ASSOC);
	    // var_dump($new);

	} catch (PDOException $e) {
	    echo 'Connection failed: ' . $e->getMessage();
	}
?>
<!DOCTYPE html>
<html>
	<?php include 'header.php'; ?>
	<body>
		<?php include 'nav.php'; ?>
		<div class="container">
			<h1>Modifier une new</h1>
			<form action="" method="post">
				<label>Titre de la new</label>
				<br />
				<input type="text" class="form" name="title" value="<?php echo $new['title']; ?>" />
				<br />
				<label>Contenue de la new</label>
				<br />
				<textarea class="form" rows="15" name="content"><?php echo $new['content']; ?></textarea>
				<br />
				<input type="submit" name="send" />
			</form>
			<p><a href="news.php">Retour aux news</a></p>
		</div>
	</body>
</html>