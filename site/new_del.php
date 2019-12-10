<?php
	/* Connect to a MySQL database using driver invocation */
	$dsn 		= 'mysql:dbname=site;host=127.0.0.1';
	$user 		= 'root';
	$password 	= 'root';

	try {
	    $dbh = new PDO($dsn, $user, $password);
	    $sql = "DELETE FROM news WHERE id = :id";
	    $sth = $dbh->prepare($sql);
	    $sth->execute(array(
	    	'id' => $_GET['id']
	    ));
	    header('Location: news.php');

	} catch (PDOException $e) {
	    echo 'Connection failed: ' . $e->getMessage();
	}
?>