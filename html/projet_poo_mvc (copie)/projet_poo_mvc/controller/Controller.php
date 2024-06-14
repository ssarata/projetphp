<?php
namespace Src\Controller;

class Controller
{
    static $VIEWS_BASE_PATH = __DIR__."/../views/";

    public function render($view_path,$data){
        extract($data);
        require Controller::$VIEWS_BASE_PATH."/../views/".$view_path;
    }
}