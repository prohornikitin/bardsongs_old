<?php
	require_once 'Controllers/LoginController.php';

	$controller = new LoginController();
	if($controller->doSignInAttempt() == false) {
		$controller->doIndexAction();
	}
?>