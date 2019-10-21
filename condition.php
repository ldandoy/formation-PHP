<?php

$a = 20;

if ($a <= 20) {
	echo '$a < 20';
} else {
	echo '$a > 20';
}

$b = 15;
if ($a == $b)
	echo '$a est égale à $b';

echo "<br />";

echo ($a == $b) ? '$a est égale à $b' : '$a n\'est pas égale à $b';
echo "<br />";

$note = 8;

if ($note < 10) {
	echo "Non obtenu";
} elseif ($note >= 10 && $note < 12) {
	echo "Sans distinction";
} elseif ($note >= 12 && $note < 14) {
	echo "Encouragements";
} elseif ($note >= 14) {
	echo "Félicitation";
}
echo "<br />";

$type = "chat";

if ($type == "chien" || $type == "chat") { # on peut utiliser or et and à la place
	echo "C'est un animal domestique";
}
echo "<br />";

$test = "value";
switch ($test) {
	case 'value':
		echo "Ici c'est value";
		break;
	
	default:
		echo "Ici c'est le cas par défault";
		break;
}