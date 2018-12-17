<?php
include 'inc/users.php';
session_start();
$users[]['username'] = $_POST['username'];
$users[]['password'] = $_POST['password'];

$_SESSION['username'] = $_POST['username'];



include 'templates/header.php';
include 'templates/welcome.php';
include 'templates/footer.php';

header( 'refresh:5;url=profil.php' );