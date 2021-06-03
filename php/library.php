<?php

include_once 'class/library.php';

if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['name']);
	$society = htmlspecialchars($_POST['society']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);

	$user = new Library($name, $society, $email, $phone);
	try {
		$user->saveProfile();
	} catch (Exception $th) {
		echo ($th->getMessage());
	}
	header("location: http://" . $_SERVER['SERVER_NAME'] . '/epitech/public/library.html');
}