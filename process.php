<?php

session_start();

$email = $_POST['email'];

if (isset($_POST['email'])) {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$_SESSION['error'] = "The email address you entered: " . $email . " is NOT a valid email address";
		header('Location: index.php');
	}
	else {
		$_SESSION['success'] = "The email address you entered: " . $email . " is a valid email address";
		header('Location: success.php');
	}
}
