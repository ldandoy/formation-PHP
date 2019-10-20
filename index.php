<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
<?php
/**
 * Les différents types de variables en PHP
 */
	$mavariable = "toto"; # Chaine de caractère => String
	$entier = 12; # Entier => Integer
	$decimal = 34.25; # Décimal => Float
	$boolean = true; # Boolean true|false ou 0|1
	$tableau = array("Lion", "Banane", "Voiture") # Tableau => Array
?>

<?php
/**
 * Utilisation des variables et des contantes
 */
$note = 10;
$note = 15;

echo $note.'<br />';

define('CONTANTE', "Toto");
echo CONTANTE;
?>
<hr />
<?php
/**
 * Les opérateurs en PHP
 */

echo "toto " . $note . " titi<br />"; # Concaténation
echo $note . " " . $entier . "<br />";
echo $note + $entier . "<br />";
echo $note - $entier . "<br />";
echo $note * $entier . "<br />";
echo $note / $entier . "<br />";
echo 6 % 3 . "<br />";
echo 7 % 3 . "<br />";

echo 10 % 5 . "<br />";
echo 30 % 5 . "<br />";

?>
	</body>
</html>