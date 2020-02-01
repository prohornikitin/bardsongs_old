<?php
require_once 'controllers/LoginController.php';

$controller = new LoginController();
if($controller->doSignInAttempt() == false) {
	$controller->doIndexAction();
}