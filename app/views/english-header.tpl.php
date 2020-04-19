<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurelie's Projects</title>
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
                <a class="nav-link <?= (isset($_SESSION['language']) && $_SESSION['language'] === 'english') ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/en" id="english">English</a>
            </li>
            <li class="nav-item">
            <a class="nav-link">|</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= (isset($_SESSION['language']) && $_SESSION['language'] === 'french') ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/" id="french">French</a>
            </li>
        </ul>
        <div class="image m-5">
            <img class="rounded-circle img-thumbnail mx-auto d-block" src="/images/image.png" alt="Aurelie's Picture" />
        </div>
        <div class="informations text-center m-2">

            <h1 class="m-0">Aurélie A.</h1>
            <p>Web and software development</p>
        </div>
        <ul class="nav justify-content-center m-2">
            <li class="nav-item">
                <a class="nav-link <?= ($match['name'] === "english-about") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/about/en">About</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link <?= ($match['name'] === "home-english") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/en" >Projects</a>
            </li>           
            <li class="nav-item">
                <a class="nav-link <?= ($match['name'] === "english-contact") ? 'active' : '' ?>" href="<?= $_SERVER['BASE_URI'] ?>/contact/en">Contact</a>
            </li>
        </ul>
    </header>