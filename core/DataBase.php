<?php

class DataBase {
    private static $instance = null;
    private static $host = 'localhost';
    private static $user = 'root';
    private static $password = '123';
    private static $dbname = 'SuperClub';

    private function __construct() {
        self::$instance = new mysqli(self::$host, self::$user, self::$password, self::$dbname);
        self::$instance->query("SET NAMES utf-8;");
    }

    public static function getInstance() {
        if (self::$instance == null) {
            return new self();
        } else return self::$instance;
    }
    public function query($query)
    {
        return self::$instance->query($query);
    }

    public static function closeConnection() {
        if (self::$instance != null)
            self::$instance->close();
    }
}
