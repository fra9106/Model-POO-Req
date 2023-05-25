<?php

namespace App\Db;

use PDO;
use Exception;

class DAO
{
    private static $instance = null;

    /**
     * Connect bdd pattern singleton
     *
     * @return PDO
     */
    public static function getPdo()
    {
        try {

            if (self::$instance === null) {
                self::$instance = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                ]);
            }
            return self::$instance;
        } catch (Exception $errorConnexion) {
            die('Erreur de connection :' . $errorConnexion->getMessage());
        }
    }
}
