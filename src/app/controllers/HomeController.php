<?php

namespace Application\App\Controllers;

use Application\App\models\Pages;

use Application\App\View;

class HomeController implements ControllerInterface
{

    public function index()
    {
        $obj = new Pages;
        var_dump($obj->getAll());
        $path = 'View';
        $data['people'] =  $obj->getAll();
        \View::generate($path,$data);

    }
    public function home()
    {
        echo "i am ==> HOME <==";
    }
    public function edit()
    {
        echo "i am ==> HOME/->EDIT<- <==";
    }

}