<?php

class mUser extends Model {

    function __construct() {
        parent::__construct();
    }

    function mostrar_anuncio($titulo, $texto) {
        try {
            $sql = "SELECT * FROM ads";
            $this->query($sql);
            $this->execute();
            if ($this->rowCount() > 0) {
                
                return TRUE;
            } else {
                
                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
}
