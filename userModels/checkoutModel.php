<?php
    class checkoutModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function getUser(int $id)
        {
            $query = "SELECT * FROM customer WHERE c_id=$id";
            $request = $this->select($query);
            return $request;
        }

       
    }

?>