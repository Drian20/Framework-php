<?php

class Error extends Controller {

    protected $model;
    protected $view;

    function __construct($params = null) {
        parent::__construct($params);
        $this->conf = Registry::getInstance();
        $this->model = new mError;
        $this->view = new vError;
    }

    function home() {
        
    }

}
