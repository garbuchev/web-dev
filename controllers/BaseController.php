<?php

abstract class BaseController {
    protected $actionName;
    protected $controllerName;
    protected $isViewRendered = false;
    protected $layoutName = DEFAULT_LAYOUT;

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

    public function renderView($viewName = null, $includeLayout = true){
        if(!$this->isViewRendered) {
            if ($viewName == null) {
                $viewName = $this->actionName;
            }

            if($includeLayout){
                $headerFile = 'views/layouts/'.$this->layoutName.'/header.php';
                include_once($headerFile);
            }

            $viewFileName = 'views/' . $this->controllerName . '/' . $viewName . '.php';
            include_once($viewFileName);

            $this->isViewRendered = true;

            if($includeLayout){
                $footerFile = 'views/layouts/'.$this->layoutName.'/footer.php';
                include_once($footerFile);
            }
        }
    }
}