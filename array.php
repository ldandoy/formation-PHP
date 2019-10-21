<?php

	$tab = ["item 1", "item 2", "item 3"];

	print_r($tab);
	echo "<hr />";
	
	$tab2 = array("item 1", "item 2", "item 3");
	print_r($tab2);
	echo "<hr />";

	$tab3 = array("test" => "item 1", "item 2", "item 3");
	print_r($tab3);
	echo "<hr />";

	echo $tab3["test"];

	echo "<hr />";

	$tab4[] = "toto";
	$tab4[] = "toto 1";
	$tab4[] = "toto 2";

	print_r($tab4);
	echo "<br />";
	echo $tab4[1];
	echo "<hr />";

	$tab5[1] = "item 1";
	$tab5[4] = "item 2";
	$tab5[2] = "item 3";
	$tab5[4] = 'test';

	print_r($tab5);
	echo "<hr />";

	echo $tab5[6];
	echo "<hr />";

	$garage['voiture1']['marque'] = "Porshe";
	$garage['voiture1']['couleur'] = "blanche";
	$garage['voiture1']['model'] = "911";
	$garage['voiture1']['vitesse'] = "301";

	$garage['voiture2']['marque'] = "Peugeot";
	$garage['voiture2']['couleur'] = "Grise";
	$garage['voiture2']['model'] = "207";
	$garage['voiture2']['vitesse'] = "200";

	echo "<pre>";
	print_r($garage);
	echo "</pre>";
	echo "<hr />";

	echo count($garage) . " " . count($garage['voiture2']);
