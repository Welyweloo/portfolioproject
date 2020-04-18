<?php

require('../vendor/autoload.php');

require('../app/views/header.tpl.php');
require('../app/views/contact.tpl.php');
require('../app/views/footer.tpl.php');

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map("GET", "/", ["Controller", "home"], "home");   
$router->map("GET", "/about", ["Controller", "about"], "about");    
$router->map("GET", "/contact", ["Controller", "contact"], "contact");  

$match = $router->match();

if ($match === false) { // si AltoRouter n'a pas trouvé l'URL demandée dans la liste de nos routes, alors page 404
    $controller = new Controller(); // instancie notre class MainController
    $controller->fourofour();
}else{

    if(!empty($match['params']['codeISO'])){ // Si un paramètre codeISO est défini, stocke le en session
        $_SESSION['currency'] = $match['params']['codeISO'];
    }
    
    $controllerToUse = "Oshop\Controller\\".$match["target"][0]; //dans quel contrôleur sqe trouve la méthode à appeler ?
    $methodToCall = $match["target"][1]; // quelle est la méthode à appeler ?

    $controller = new $controllerToUse(); //truc méga chelou : on crée une instance à partir du nom du contrôleur qui est contenu, sous forme de chaîne dans notre variable
    $controller->$methodToCall( $match["params"] ); //même logique... on connait le nom de la méthode à appeler, il est dans notre variable... 
}