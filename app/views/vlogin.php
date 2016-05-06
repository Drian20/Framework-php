<?php

class vLogin extends View {

    function __construct() {
        parent::__construct();

        $this->tpl = Template::load('login', $this->view_data);
    }

}
