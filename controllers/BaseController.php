<?php

abstract class BaseController {
    protected $action;
    protected $controllerName;

    function __construct($controllerName, $action){
        $this->controllerName = $controllerName;
        $this->action = $action;
    }

    public function index(){
        //implement default action in the subclasses
    }

    public function renderView($viewName = null){
        if ($viewName == null){
            $viewName = $this->action;
        }

        $viewFileName = 'views/'.$this->controllerName.'/'.$this->action.'.php';
        include_once($viewFileName);
    }
}