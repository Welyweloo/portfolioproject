<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les projets d'Aurélie</title>
    <link rel="shortcut icon" href="/images/favicon.ico" src="https://www.flaticon.com/authors/iconixar/">
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Codystar&family=Slabo+27px&display=swap" rel="stylesheet">
    
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
            <img class="rounded-circle img-thumbnail mx-auto d-block" src="/images/image.png" alt="Photo d'Aurélie" />
        </div>
        <div class="informations text-center m-2">

            <h1 class="m-0">Aurélie A.</h1>
            <p>Développement web et logiciel</p>
        </div>
        <ul class="nav justify-content-center m-2">
            <li class="nav-item">
                <a class="nav-link <?= ($match['name'] === "about") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/about">À propos</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link <?= ($match['name'] === "home") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/" >Projets</a>
            </li>           
            <li class="nav-item">
                <a class="nav-link <?= ($match['name'] === "contact") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/contact">Contact</a>
            </li>
        </ul>
    </header>