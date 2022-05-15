<?php
    class login2Model extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function findUser(string $email)
        {
            $query_insert = "SELECT * FROM customer WHERE c_email='$email'";
            $request_select = $this->select($query_insert);
            return $request_select;
        }
    }

?>