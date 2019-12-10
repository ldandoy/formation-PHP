<?php
	/* Connect to a MySQL database using driver invocation */
	$dsn 		= 'mysql:dbname=site;host=127.0.0.1';
	$user 		= 'root';
	$password 	= 'root';

	try {
	    $dbh = new PDO($dsn, $user, $password);
	    $sql = "SELECT * FROM news";
	    $sth = $dbh->prepare($sql);
	    $sth->execute();
	    $news = $sth->fetchAll(PDO::FETCH_ASSOC);
	    // var_dump($news);

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
			<h1>Les dernières news</h1>
			<p>
				<a href="new_add.php">Ajouter une news</a>
			</p>
			<?php
				foreach ($news as $new) {
					echo '<div class="new">';
					echo '<h2>'.$new['title'].'</h2>';
					echo '<p>'.$new['content'].' <a href="new.php?id='.$new['id'].'">Lire la suite</a></p>';
					echo '</div>';
				}
			?>
		</div>
	</body>
</html>