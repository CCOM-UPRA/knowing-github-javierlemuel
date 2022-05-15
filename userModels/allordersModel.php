<?php

    class allordersModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function getUserOrders($id)
        {
            $sql = "SELECT * FROM orders WHERE c_id = $id AND order_status != 'cancelled'";
            $request = $this->select_all($sql);
            return $request;
        }

        public function updateOrdersStatus($orderid, $status)
        {
            $sql = "UPDATE orders SET order_status = ? WHERE order_id = ?";
            $arrData = array($status, $orderid);
            $request = $this->update($sql, $arrData);
            return;

        }

    }
?>