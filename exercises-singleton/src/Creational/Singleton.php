<?php

namespace Patterns\Creational;


class Singleton {
    private static $_instance = null;

    
    public static function getInstance(){

        if (self::$_instance == null) {
            self::$_instance =  new Singleton;
        }   
        return self::$_instance;
    }


}