<?php

class vHome extends View {

    function __construct() {
        parent::__construct();

        $this->tpl = Template::load('home', $this->view_data);
    }

}
