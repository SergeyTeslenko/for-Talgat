<?php

namespace Application\App\Controllers;

use Application\App\models\Pages;
use Application\App\models\User as ModelUsers;

class UsersController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $obj = new ModelUsers();
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
        echo "i am ==> UserController <==";
    }
}