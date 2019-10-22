<?php

function verif(array $var) : bool
{
	$login 	= $var['login'];
	$pwd 	= $var['pwd'];

	if ($login == "admin" && $pwd == "admin") {
		$_SESSION['login'] = "admin";
		return true;
	}

	return false;
}