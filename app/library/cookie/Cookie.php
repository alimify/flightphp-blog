<?php

namespace app\library\cookie;

class Cookie {

    function set($name,$value){
        setcookie($name, $value, time() + 86400, '/');
    }

    function get($name){
        return $_COOKIE[$name]??null;
    }

    static function remove($name){
        setcookie($name, '', time() - 3600, '/');
    }

    function clear(){
        foreach ($_COOKIE as $cookie_name => $cookie_value) {
            setcookie($cookie_name, '', time() - 3600, '/');
        }
    }
}