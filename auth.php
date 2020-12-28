<?php 
	if ($_COOKIE['user'] == 'Да') 
		setcookie('user', 'Да', time() - 30, '/');
	else 
		setcookie('user', 'Да', time() + 30, '/');

	header('Location: /');
 ?>