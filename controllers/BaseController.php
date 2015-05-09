<?php

abstract class BaseController {
    protected $actionName;
    protected $controllerName;
    protected $isViewRendered = false;

    function __construct($controllerName, $action){
        $this->controllerName = $controllerName;
        $this->actionName = $action;
        $this->onInit();
    }

    public function onInit(){
        //implement initializing logic in the subclasses
    }

    public function index(){
        //implement default action in the subclasses
    }

    public function renderView($viewName = null){
        if(!$this->isViewRendered) {
            if ($viewName == null) {
                $viewName = $this->actionName;
            }

            $viewFileName = 'views/' . $this->controllerName . '/' . $viewName . '.php';
            include_once($viewFileName);
            $this->isViewRendered = true;
        }
    }
}