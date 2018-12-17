<?php
include 'inc/users.php';
session_start();
session_destroy();
session_start();


include 'templates/header.php';
include 'templates/loginform.php';
include 'templates/footer.php';

 