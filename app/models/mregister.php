<?php

class mRegister extends Model {

    function __construct() {
        parent::__construct();
    }

    function register($username, $name, $lastname, $password, $email, $country) {
        try {
            $sql = "SELECT * FROM users WHERE email=:email";
            $this->query($sql);
            $this->bind(':email', $email);
            $this->execute();
            if ($this->rowCount() == 0) {
                $query = "CALL insert_user(:username, :name, :lastname, :password, :email, :country, 1)";
                $this->query($query);
                $this->bind(':username', $username);
                $this->bind(':name', $name);
                $this->bind(':lastname', $lastname);
                $this->bind(':password', $password);
                $this->bind(':email', $email);
                $this->bind(':country', $country);
                $this->execute();
                Session::set('isregistered', TRUE);
                Session::set('email', $email);
                return TRUE;
            } else {
                Session::set('isregistered', FALSE);
                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

}

?>