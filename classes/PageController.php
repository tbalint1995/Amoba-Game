<?php 

namespace classes;

defined('IN_PRODUCTION') or die('No direct access allowed!');

use traits\View;
use classes\Request;

class PageController extends Controller{

    private $middlewares;
    use View;
    
    function __construct()
    {
        parent::__construct();
        $this->middlewares = include(__DIR__.'/../middlewares.php');
    }

    public function loginPage() : mixed {
        call_user_func($this->middlewares["guest"]);
        return $this->view('login');
    }

    public function play() : mixed {
        call_user_func($this->middlewares["auth"]);
        return $this->view('play');
    }

    public function logout() : mixed {
        unset($_SESSION["player1"], $_SESSION["player2"]);
        header('location: /' );
    }

    public function loginProcess(){
        Request::checkMethod('POST');
        
        if( Request::has('username1') ) {
 
            if( static::$PLAYER1["username"]===Request::get('username1') 
                && 
                password_verify(Request::get('password1'), static::$PLAYER1["password"] ) )
                {
                    
                $_SESSION["player1"] = true;
            } else {
                $_SESSION["error"]='Hibás adatok!';
                header('location: /' );
                return;
            }
        }
        elseif( Request::has('username2') ) {

            if( static::$PLAYER2["username"]===Request::get('username2') 
                && 
                password_verify(Request::get('password2'), static::$PLAYER2["password"] ) )
                {
                $_SESSION["player2"] = true;
            } else {
                $_SESSION["error"]='Hibás adatok!';
                header('location: /' );
                return;
            }
        }

        if( isset( $_SESSION["player1"] ) && isset($_SESSION["player2"]) )
        {
            header("location: /?play");
        } else {
            header('location: /' );
        }
       return;  
    }
}