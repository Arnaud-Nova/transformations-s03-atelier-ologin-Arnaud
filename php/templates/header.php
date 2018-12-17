<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>oLogin</title>
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700,700i" rel="stylesheet"> 
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  
  <div id="app">
    <header id="header">
      <h1 id="app-title"><a href="#">oLogin</a></h1>
      <nav id="nav">
        <a href="index.php">Accueil</a>
        <a href="profil.php">Profil</a>
        <a href="#">À propos</a>
        <a href="#">FAQ</a>
        <a href="#">Contact</a>
        <?php
        if (!empty($_SESSION['username'])) :?>
          <a href="index.php">Déconnexion</a>
        <?php
        endif;
        ?>
      </nav>
    </header>