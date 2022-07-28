<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{

    public $mysql;

    public function __construct()
    {
        try {


            $this->mysql = $this->getConnection();
            

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    private function getConnection()
    {
        $host = "localhost";
        $user = "root";
        $pass = NULL;
        $database = "factoriaf5_support2";//esta es la conexion a la db
        $charset = "utf-8";
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo("mysql:host={$host};dbname={$database};charset{$charset}", $user, $pass, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
