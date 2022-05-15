<?php
    class invoiceModel extends Mysql{
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

        public function getOrder($orderid)
        {
            $sql = "SELECT * FROM orders WHERE order_id = $orderid";
            $request = $this->select($sql);
            return $request;
        }

        public function getProducts($orderid)
        {
            $sql = "SELECT * FROM contains NATURAL JOIN products WHERE order_id = $orderid";
            $request = $this->select_all($sql);
            return $request;
        }
    }

?>