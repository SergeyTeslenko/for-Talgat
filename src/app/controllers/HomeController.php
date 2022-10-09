<?php

namespace Application\App\Controllers;
use Application\App\models\models\Pages;

class HomeController implements ControllerInterface
{
    public function index()
    {
   $obj = new Pages();
        var_dump($obj ->getAll());
    }

    public function edit()
    {
        echo "i am ==> HOME/->EDIT<- <==";
    }

}