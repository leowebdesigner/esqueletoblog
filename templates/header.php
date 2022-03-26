<?php

require_once("helpers/url.php");
include_once("data/categories.php");
include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog do Léo</title>
    <!-- CSS -->
    <link rel ="stylesheet" href ="<?= $BASE_URL ?>/css/styles.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

</head>

<header>

    <a href="<?= $BASE_URL ?>">
    <img src ="<?= $BASE_URL ?>/img/logoleo.png" id= "logo" alt ="Logo Leo Web Design">
    </a>

    <nav>
       <ul id="navbar">
           <li><a href="<?= $BASE_URL ?>" class ="nav-link">Home</a></li>
           <li><a href="<?= $BASE_URL ?>" class ="nav-link">Categorias</a></li>
           <li><a href="<?= $BASE_URL ?>" class ="nav-link">Sobre</a></li>
           <li><a href="<?= $BASE_URL ?>" class ="nav-link">Contato</a></li>
       </ul>
    </nav>




</header>