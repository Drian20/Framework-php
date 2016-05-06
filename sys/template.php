<?php

/**
 * 
 * @author Adri
 * 
 * */
class Template {

    static $current_view;

    static function load($contents, $data = null) {

        if (is_array($data)) {
            extract($data);
        }

        self::$current_view = $contents;

        include APP . 'tpl' . DS . 'head.php';
        include APP . 'tpl' . DS . $contents . '.php';
        include APP . 'tpl' . DS . 'footer.php';
    }

}
