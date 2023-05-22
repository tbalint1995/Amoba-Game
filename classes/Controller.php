<?php

namespace classes;

class Controller
{
    public static $PLAYER1, $PLAYER2;

    function __construct(){

        session_start();

        self::$PLAYER1 = [
            'username' => 'Player1', 'password' => password_hash('password', PASSWORD_DEFAULT) // :)
        ];
    
        self::$PLAYER2 = [
            'username' => 'Player2', 'password' => password_hash('password', PASSWORD_DEFAULT) // :)
        ];
    }
}
