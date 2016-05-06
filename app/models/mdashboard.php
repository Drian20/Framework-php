<?php

class mDashboard extends Model {

    function __construct() {
        parent::__construct();
    }

    function insert_user($username, $name, $lastname, $password, $email, $country, $rol) {
        try {
            $sql = "SELECT * FROM users WHERE email=:email";
            $this->query($sql);
            $this->bind(':email', $email);
            $this->execute();
            if ($this->rowCount() == 0) {
                $query = "INSERT INTO users (username, name, lastname, password, email, country, rol) VALUES (:username, :name, :lastname, :password, :email, :country, :rol)";
                $this->query($query);
                $this->bind(':username', $username);
                $this->bind(':name', $name);
                $this->bind(':lastname', $lastname);
                $this->bind(':password', $password);
                $this->bind(':email', $email);
                $this->bind(':country', $country);
                $this->bind(':rol', $rol);
                $this->execute();
                $resp=$this->resultSet();
                return $resp;
            } else {
                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    function update_user($id, $username, $name, $lastname, $password, $email, $country, $rol) {
        try {
            $sql = "SELECT * FROM users WHERE id=:id";
            $this->query($sql);
            $this->bind(':id', $id);
            $this->execute();
            if ($this->rowCount() == 1) {
                if($username!=null){
                    $query = "UPDATE users SET username = :username WHERE id=:id";
                    $this->query($query);
                    $this->bind(':username', $username);
                    $this->bind(':id', $id);
                    $this->execute();
                }elseif($name!=null){
                    $query = "UPDATE users SET name = :name WHERE id=:id";
                    $this->query($query);
                    $this->bind(':name', $name);
                    $this->bind(':id', $id);
                    $this->execute();
                }elseif($lastname!=null){
                    $query = "UPDATE users SET lastname = :lastname WHERE id=:id";
                    $this->query($query);
                    $this->bind(':lastname', $lastname);
                    $this->bind(':id', $id);
                    $this->execute();
                }elseif($password!=null){
                    $query = "UPDATE users SET password = :password WHERE id=:id";
                    $this->query($query);
                    $this->bind(':password', $password);
                    $this->bind(':id', $id);
                    $this->execute();
                }elseif($email!=null){
                    $query = "UPDATE users SET email = :email WHERE id=:id";
                    $this->query($query);
                    $this->bind(':email', $email);
                    $this->bind(':id', $id);
                    $this->execute();
                }elseif($country!=null){
                    $query = "UPDATE users SET country = :country WHERE id=:id";
                    $this->query($query);
                    $this->bind(':country', $country);
                    $this->bind(':id', $id);
                    $this->execute();
                }elseif($rol!=null){
                    $query = "UPDATE users SET rol = :rol WHERE id=:id";
                    $this->query($query);
                    $this->bind(':rol', $rol);
                    $this->bind(':id', $id);
                    $this->execute();
                }
                $resp=$this->resultSet();
                return $resp;
            } else {
                return FALSE;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    function delete_user($username) {
        try {
            $query = "DELETE FROM users WHERE username=:username";
            $this->query($query);
            $this->bind(':username', $username);
            $this->execute();
                $resp=$this->resultSet();
                return $resp;
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    function showUsers(){
        try{
            $query="SELECT * FROM users";
            $this->query($query);
            $this->execute();
            $q=$this->resultSet();
            return $q;
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }

}
