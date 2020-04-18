<?php

namespace App\Controller;

class Controller 
{
    public function show($templateName)
    {
        //Language choice
        if(!isset($_SESSION['language'])) { 
            $_SESSION['langue'] = 'french';
        }

        require("../app/views/header.tpl.php");
        require("../app/views/$templateName.tpl.php");
        require("../app/views/footer.tpl.php");
    }

    public function home()
    {
        $this->show("home");
    }

    public function about()
    {
        $this->show("about");
    }

    public function contact()
    {
        $this->show("contact");
    }

    public function fourofour ()  // page d'erreur 404
    {
        die("404 fais gaffe dude");
        
        //on indique aux robots genre Google que c'est une page d'erreur
        header("HTTP/1.0 404 Not Found");
        $this->show('404');
    }
}