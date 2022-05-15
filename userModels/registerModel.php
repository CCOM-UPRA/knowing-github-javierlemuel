<?php

    class registerModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function findUser2($name, $lastname, $email)
        {
            $sql = "SELECT * FROM customer WHERE c_first_name = '$name' AND c_last_name = '$lastname'
            AND c_email = '$email'";
            $request = $this->select($sql);
            return $request;
        }

        public function createUser($name, $lastname, $email, $password)
        {
            $sql = "INSERT INTO customer(c_email, c_first_name, c_last_name, c_password)
            VALUES(?,?,?,?)";
            $arrData = array($email, $name, $lastname, $password);
            $request_insert = $this->insert($sql, $arrData);
            return $request_insert;
        }
        

    }
?>