<?php

include_once 'class/user.php';
if (isset($_POST['sign_in'])) {
	$login = htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);

	$user = new User($login, $password);
	$user->sign_in();
	header("location: http://" . $_SERVER['SERVER_NAME'] . '/epitech/public/profil.php');
} elseif (isset($_POST['sign_up'])) {
	$login = htmlspecialchars($_POST['login2']);
	$password = htmlspecialchars($_POST['password2']);

	$user = new User($login, $password);
	$user->sign_up();
	$user->sign_in();
	header("location: http://" . $_SERVER['SERVER_NAME'] . '/epitech/public/profil.php');
}
