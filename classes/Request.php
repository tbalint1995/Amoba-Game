<?php 

namespace classes;

defined('IN_PRODUCTION') or die('No direct access allowed!');

class Request {
    public static function get($key){
        return $_POST[$key];
    }

    public static function checkMethod($method){
        if( $_SERVER["REQUEST_METHOD"] !== $method ) {
            http_response_code(403);
            exit;
        }
    }

    public static function has($key){
        return isset($_POST[$key]);
    }

   
}