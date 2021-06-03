<?php

include_once 'class/profile.php';
include_once 'class/user.php';

if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['name']);
	$society = htmlspecialchars($_POST['society']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);

	$user = new Profile($name, $society, $email, $phone);
	try {
		$user->saveProfile();
	} catch (Exception $th) {
		echo ($th->getMessage());
	}
	header("location: http://" . $_SERVER['SERVER_NAME'] . '/epitech/public/profil.php');
}

if (isset($_GET['d'])) {
	User::sign_out();
	header("location: http://" . $_SERVER['SERVER_NAME'] . '/epitech/public/');
}
