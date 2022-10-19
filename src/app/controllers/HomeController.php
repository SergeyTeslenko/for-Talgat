<?php

namespace Application\App\Controllers;

use Application\App\models\Pages;

use Application\App\View;
use Exception;

class HomeController implements ControllerInterface
{

    /**
     * @throws Exception
     */
    public function index()
    {
        $obj = new Pages;
        $data = [];
        $data['people'] = $obj->getAll();
         View::generate('home', $data);
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