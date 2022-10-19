<?php

namespace Application\App;

use Exception;

class View
{
    /**
     * @throws Exception
     */
    public static function generate(string $path, array $data = []): void
    {
        $paths = require_once "config/path.php";
        $filePath = $paths['views'] . $path . '.php';
        extract($data);
        if (file_exists($filePath)) {
            include $filePath;
            exit();
        } else {
            throw new \Exception('Templates ' . $filePath . ' absent');
        }
    }
}