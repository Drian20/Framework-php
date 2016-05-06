<?php

class mLogin extends Model {

    function __construct() {
        parent::__construct();
    }

    function login($username, $password) {
        try {
            $sql = "SELECT * FROM users WHERE username=:username AND password=:password";
            $this->query($sql);
            $this->bind(':username', $username);
            $this->bind(':password', $password);
            $this->execute();
            $user = $this->single();
            if ($this->rowCount() == 1) {
                if ($user[0]['rol'] == 1) {
                    return 1;
                } else {
                    return 2;
                }
            } else {
                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

}
