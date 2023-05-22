<?php 

namespace classes;

defined('IN_PRODUCTION') or die('No direct access allowed!');

class Route {
    public static function get( $url, $function ) {
        if( $_SERVER["REQUEST_URI"] === $url && $_SERVER["REQUEST_METHOD"] === 'GET' ) {
            call_user_func($function);
            exit;
        }
    }

    public static function post( $url, $function ) {
        if($_SERVER["REQUEST_URI"] === $url &&  $_SERVER["REQUEST_METHOD"] === 'POST' ) {
            call_user_func($function);
            exit;
        }
    }
}