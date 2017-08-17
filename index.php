<?php 
	$loader = require __DIR__ . '/vendor/autoload.php';

	use agua\entidades\Usuario;

	$u = new Usuario();
	$u->login = 'Thalles';

	echo $u->login;
?>