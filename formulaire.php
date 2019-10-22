<?php
	// Récupération des variables en GET
	// ---------------------------------
	/*echo "<pre>";
	print_r($_GET);
	echo "</pre>";*/

	if (isset($_GET['send']) && $_GET['a'] != "" && $_GET['b'] != ""){
		$a = $_GET['a'];
		$b = $_GET['b'];
		$send = $_GET['send'];

		echo $a + $b;
	}

	// Récupération des variables en POST
	// ---------------------------------
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";*/
	$msg = "";
	if (isset($_POST['send'])) {
		if ($_POST['a'] != "" && $_POST['b'] != "") {
			$a = $_POST['a'];
			$b = $_POST['b'];
			$send = $_POST['send'];

			echo $a + $b;
		} else {
			$msg = "Vous devez remplir tous les champs";
		}
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<style type="text/css" media="screen">
			.red {
				color: red;
			}
		</style>
	</head>
	<body>
		<?php if ($msg != "") { echo "<h5 class='red'>$msg</h5>"; } ?>
		<form action="" method="post" accept-charset="utf-8">
			<label for="id_a">A: </label><input id="id_a" type="text" name="a"><br />
			<label for="id_b">B: </label><input id="id_b" type="text" name="b"><br /><br />

			<input type="checkbox" name="test" />
			<input type="submit" name="send" value="Additionner" />
		</form>
	</body>
</html>