<?php

class vUser extends View {

    function __construct() {
        parent::__construct();

        $this->tpl = Template::load('user', $this->view_data);
    }

}
