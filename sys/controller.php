<?php

/**
 *  
 *  @author Adri
 * 
 * */
class Controller {

    protected $model;
    protected $paginator;
    protected $view;
    protected $params;
    protected $conf;

    function __construct($params) {
        $this->params = $params;
        $this->conf = Registry::getInstance();
    }

    function json_out($output) {
        ob_clean();
        if (is_array($output)) {
            echo json_encode($output);
        }
    }

}
