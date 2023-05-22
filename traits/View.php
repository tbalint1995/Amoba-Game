<?php 

namespace traits;

defined('IN_PRODUCTION') or die('No direct access allowed!');

trait View {
    function view($file, $data=[]) : void {
        foreach( $data as $varname => $value ) {
            $this->$varname = $value;
        }
        require __DIR__.'/../views/'.$file.'.php';
    }
}