<?php

namespace Application\App\models;

use Application\src\orm\Select;

class User
{
    public function getAll(): array
    {
        $select = new Select();
       $select->setTableName('users');
      $data =  $select->execute();
      $rows = $data ->fetchAll(\PDO::FETCH_ASSOC);
//      var_dump($rows);
        return  $rows;
    }
}