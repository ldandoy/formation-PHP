<?php

	function meuhhh () {
		echo "MMmmmeuhhh<br />";
	}

	meuhhh();

	$a = 50;
	echo $a."<br />";

	function add2chiffre(int $_a , int $_b) :int
	{
		echo $_a."<br />";
		return $_a+$_b;
	}

	$res = add2chiffre(2, 12);
	echo $res."<br />";
	echo $a."<br />";