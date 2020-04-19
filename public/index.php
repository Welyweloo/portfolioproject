<?php

require('../vendor/autoload.php');
session_start();

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

require('../vendor/autoload.php');


$router->map("GET", "/", ["Controller", "home"], "home");   
$router->map("GET", "/projects", ["Controller", "projects"], "projects");    
$router->map("GET", "/contact", ["Controller", "contact"], "contact"); 
$router->map("GET", "/en", ["Controller", "english"], "home-english");
$router->map("GET", "/projects/en", ["Controller", "projects"], "english-projects");
$router->map("GET", "/contact/en", ["Controller", "contact"], "english-contact"); 

  


$match = $router->match();

if ($match === false) { 
    $controllerToUse = "App\Controller\Controller"; 
    $controller = new $controllerToUse(); 
    $controller->fourofour();
}else{

    if(!empty($match['params']['language'])){
        $_SESSION['language'] = $match['params']['language'];
    }
    
    $controllerToUse = "App\Controller\\".$match["target"][0]; 
    $methodToCall = $match["target"][1]; 

    $controller = new $controllerToUse(); 
    $controller->$methodToCall( $match["params"] ); 
}