<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Description" content="Portfolio d'Aurélie ANGLIO, en recherche d'alternance pour une Licence Informatique. Présentation de ses projets professionnels et personnels de développement web. ">
        <meta property="og:site_name" content="Aurélie ANGLIO"/>
        <meta property="og:title" content="DEVELOPPEUR WEB"/>
        <meta property="og:url" content="http://aurelie.chercheunealternance.fr"/>
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="Portfolio d'Aurélie ANGLIO, en recherche d'alternance pour une Licence Informatique. Présentation de ses projets professionnels et personnels de développement web. "/>
        <title>Aurélie ANGLIO - Dev Junior</title>
        <link rel="shortcut icon" href="/images/favicon.ico" href="https://www.flaticon.com/authors/iconixar/">
        <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script rel="preconnect" src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="/css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap&family=Slabo+27px&display=swap" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <ul class="nav nav--language justify-content-center m-2">
                <li class="nav-item">
                    <a class="nav-link <?= (isset($_SESSION['language']) && $_SESSION['language'] === 'english') ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/en">English</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">|</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link <?= (isset($_SESSION['language']) && $_SESSION['language'] === 'french') ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/">Français</a>
                </li>
            </ul>
            <div class="image m-5">
                <img class="rounded-circle img-thumbnail mx-auto d-block" src="/images/aurelie.png" alt="Photo d'Aurélie" />
            </div>
            <div class="informations text-center m-2">
                <h1 class="m-0">Aurélie A. <span class="localisation"><i class="em em-round_pushpin"></i> Paris</span></h1>
                <p>Développement web et logiciel</p>
            </div>
            <ul class="nav justify-content-center m-2">
                <li class="nav-item">
                    <a class="nav-link <?= ($match['name'] === "home") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docs/cv_aurelie_maj_avril_2020.pdf" target="_blank">CV</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link <?= ($match['name'] === "projects") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/projects" >Projets</a>
                </li>           
                <li class="nav-item">
                    <a class="nav-link <?= ($match['name'] === "contact") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/contact">Contact</a>
                </li>
            </ul>
        </header>