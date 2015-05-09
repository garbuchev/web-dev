<?php

class AuthorsController extends BaseController
{
    public function onInit()
    {
        $this->title = "Play with Authors";
    }

    public function index()
    {
        $this->authors = array(
            array('id' => 1, 'name' => "Ivan"),
            array('id' => 2, 'name' => "Pesho"),
            array('id' => 3, 'name' => "Gosho")
        );
    }

    public function create()
    {
        $this->renderView();
    }

    public function delete()
    {
        $this->renderView("index");
    }

}