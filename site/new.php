<?php
	/* Connect to a MySQL database using driver invocation */
	$dsn 		= 'mysql:dbname=site;host=127.0.0.1';
	$user 		= 'root';
	$password 	= 'root';

	try {
	    $dbh = new PDO($dsn, $user, $password);
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
			<h1><?php echo $new['title']; ?> <span class="small"><a href="new_edit.php?id=<?php echo $new['id']; ?>" class="green">Modifier</a> <a href="new_del.php?id=<?php echo $new['id']; ?>" class="red">Supprimer</a></span></h1>
			<p class="new"><?php echo $new['content']; ?></p>
			<p><a href="news.php">Retour aux news</a></p>
		</div>
	</body>
</html>