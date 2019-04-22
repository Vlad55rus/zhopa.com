<?php

class DataBase {
    private static $instance = null;
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '123';
    private static $dbname = 'SuperClub';
    private static $dbtype = 'mysql:';

    private function __construct() {
        self::$instance = new PDO(self::$dbtype . 'host=' . self::$host . ';dbname=' . self::$dbname,
                self::$user, self::$password);
    }

    public static function getInstance() {
        if (self::$instance == null) {
            return new self();
        } else return self::$instance;
    }

    public static function query($query) {
        return self::$instance->query($query);
    }

    public static function closeConnection() {
        if (self::$instance != null)
            self::$instance = null;
    }
}
