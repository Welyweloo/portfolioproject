<?php

namespace App\Controller;

class Controller 
{
    public function show($templateName)
    {
        global $match;

        //Language choice
        if(!isset($_SESSION['language']))
        { 
            $_SESSION['language'] = 'french';
        }

        if($match['name'] === 'home-english')
        {
            $_SESSION['language'] = 'english';
        }
        else if($match['name'] === 'home')
        {
            $_SESSION['language'] = 'french';
        }

        //*HEADER
        if(isset($_SESSION['language']) && $_SESSION['language'] === 'french')
        {
            require("../app/views/header.tpl.php");
        }
        else
        {
            require("../app/views/english-header.tpl.php");
        }


        require("../app/views/$templateName.tpl.php");

        //*FOOTER
        if(isset($_SESSION['language']) && $_SESSION['language'] === 'french')
        {
            require("../app/views/footer.tpl.php");
        }
        else
        {
            require("../app/views/english-footer.tpl.php");
        }
    }

    public function home()
    {
        $_SESSION['language'] ='french';
        $this->show("home");

        
    }

    public function about()
    {
        if(isset($_SESSION['language']) && $_SESSION['language'] === 'french')
        {
            $this->show("about");
        }
        else
        {
            $this->show("english-about");
        }
    }

    public function contact()
    {
        $this->show("contact");
    }

    public function english()
    {
        $_SESSION['language'] ='english';
        $this->show("english-home");
    }

    public function fourofour ()  // page d'erreur 404
    {
        $this->show('fourofour');
    }
}