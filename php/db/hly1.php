<?php
require_once __DIR__ . '/hly2.php';

class DbHelper {
    /**
     * @var PDO
     */
    private static $pdo;

    public static function getPDO() {

        if (!is_null(self::$pdo)) {
            return self::$pdo;
        }
        try {
            $dsn = 'mysql:host=' . DbConfig\Config::MYSQL_HOST . ';dbname=' . DbConfig\Config::MYSQL_DB_NAME . ';charset=utf8';
            self::$pdo = new PDO($dsn, DbConfig\Config::MYSQL_USER_NAME, DbConfig\Config::MYSQL_USER_PASSWORD);
            self::$pdo->exec("set names utf8");
            return self::$pdo;
        } catch (PDOException $e) {
            return null;
        }
    }