<?php

	// Boucle Pour (For)
	//------------------------------------
	for ($i = 0; $i <= 10; $i++) {
		echo $i . "<br />";
	}

	echo "<hr />";

	// Boucle Tant que (While)
	//------------------------------------
	$i = 0;
	while ($i <= 10) {
		echo $i."<br />";
		$i ++;
	}

	$couleur = "Gris";
	$manteau = true;
	while ($manteau == true) {
		echo "Coucou $couleur <br />";
		if ($couleur != "Bleu") {
			$couleur = "Bleu";
		} else {
			$manteau = false;
		}
	}

	echo "<hr />";

	// Boucle Faire Tante Que (do while)
	//------------------------------------
	$compteur = 0;
	do {
		echo $compteur . "<br />";
		$compteur++;
	} while ($compteur <= 10);

	echo "<hr />";

	// Boucle Pour chaque (foreach)
	//------------------------------------
	$tab = ['Lion', 'Aigle', 'Tigre', 'Zèbre'];
	foreach ($tab as $key => $item) {
		echo $key. ": " .$item."<br />";
	}