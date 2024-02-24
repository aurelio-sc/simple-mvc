<?php

namespace Config;

use PDO;

class Database {
    private const HOST = 'localhost';
    private const DB = 'simple_mvc';
    private const USER = 'root';
    private const PASSWORD = '';

    protected static $pdo;

    public static function connect() {
        if (!isset(self::$pdo)) {
            $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DB;
            self::$pdo = new PDO($dsn, self::USER, self::PASSWORD);
        }
        return self::$pdo;
    }
}