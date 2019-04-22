<?php

class Loader {
    public static function ClassLoader($className) {
        $className = $className . '.php';
        if (preg_match('(_controller)', $className))
            include 'controllers/' . $className;
        else if (preg_match('(abstract_|Router|DataBase)', $className))
            include 'core/' . $className;
        else if (preg_match('(_model)', $className))
            include 'models/' . $className;
        else if (preg_match('(_view)', $className))
            include 'views/' . $className;
    }
}