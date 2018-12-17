<?php
include 'inc/users.php';
session_start();
if (empty($_SESSION['username'])) {
    foreach ($users as $user) {
        if ($user['username'] == $_POST['username'] && $user['password'] == $_POST['password']) {
            $_SESSION['username'] = $_POST['username'];
            break;
        }
    }
}

include 'templates/header.php';

if (empty($_SESSION['username'])) : ?>
    <p id="connexion-fail">Utilisateur ou mot de passe incorrect retournez à la page de connexion</p>
<?php
else :
    include 'templates/profil.php';
endif;

include 'templates/footer.php';







 