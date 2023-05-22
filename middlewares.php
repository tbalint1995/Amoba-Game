<?php 

defined('IN_PRODUCTION') or die('No direct access allowed!');

/**
 * A 'auth' funkció ellenőrzi, hogy a 'player1' és 'player2' 
 * session változók be vannak-e állítva. Ha valamelyik vagy mindkettő nincs beállítva, 
 * a felhasználót átirányítja a főoldalra ('/'). A 'guest' funkció ellenőrzi, hogy mindkét 
 * 'player1' és 'player2' session változó be van-e állítva. Ha igen, akkor a felhasználót 
 * átirányítja a játékoldalra ('/?play'). 
 */

return [
        'auth' => function(){
            if( !isset($_SESSION["player1"] ) || !isset($_SESSION["player2"] ) ) {
                header("location: /");
                return;
            }
        },

        'guest'=>function(){
            if( isset($_SESSION["player1"] ) && isset($_SESSION["player2"] ) ) {
                header("location: /?play");
                return;
            }
        }
    ];

