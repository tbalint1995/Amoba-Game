<?php 

define('IN_PRODUCTION', true);

spl_autoload_register(function($file){
    require_once "$file.php";
});
 
use classes\PageController;
use classes\Route;

Route::get('/', function(){
    (new PageController)->loginPage();
});

Route::post('/', function(){
    (new PageController)->loginProcess();
});

Route::get('/?play', function(){
    (new PageController)->play();
});

Route::get('/?logout', function(){
    (new PageController)->logout();
});

// Ha a fenti útvonalak közül egyik sem illeszkedik, akkor válaszkóddá a 404-et állítjuk be
http_response_code(404);