<?php

require('../vendor/autoload.php');
session_start();

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);


$router->map("GET", "/", ["Controller", "home"], "home");   
$router->map("GET", "/about", ["Controller", "about"], "about");    
$router->map("GET", "/contact", ["Controller", "contact"], "contact");  

$match = $router->match();

if ($match === false) { 
    $controller = new Controller(); 
    $controller->fourofour();
}else{

    if(!empty($match['params']['codeISO'])){
        $_SESSION['currency'] = $match['params']['codeISO'];
    }
    
    $controllerToUse = "App\Controller\\".$match["target"][0]; 
    $methodToCall = $match["target"][1]; 

    $controller = new $controllerToUse(); 
    $controller->$methodToCall( $match["params"] ); 
}