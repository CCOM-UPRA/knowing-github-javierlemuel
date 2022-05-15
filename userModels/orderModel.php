<?php
    class orderModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function updateUser($adress1, $address2, $city, $state, $zipcode, $cardname, $cardtype, $cardnum, $expdate)
        {
            $sql = "UPDATE customer SET address_line_1 = ?, address_line_2 = ?, c_city = ?, c_state = ?, c_zipcode = ?,
            c_card_name = ?, c_card_type = ?, c_card_number = ?, c_exp_date = ? WHERE c_id = ?";
            $arrData = array($adress1, $address2, $city, $state, $zipcode, $cardname, $cardtype, $cardnum, $expdate, $_SESSION['id']);
            $request = $this->update($sql, $arrData);
            return $request;
        }

        public function findUser(string $id)
        {
            $query_insert = "SELECT * FROM customer WHERE c_id=$id";
            $request_select = $this->select($query_insert);
            return $request_select;
        }

        public function createOrder($id, $date, $total, $status)
        {
            $sql = "INSERT INTO orders(c_id, order_date, total_price, order_status)
            VALUES(?,?,?,?)";
            $arrData = array($id, $date, $total, $status);
            $request = $this->insert($sql, $arrData);
            return $request;
        }

        public function getOrderID()
        {
            $sql = "SELECT * FROM orders WHERE order_status = 'temp'";
            $request = $this->select($sql);
            return $request;
        }

        public function getOneOrder($orderid)
        {
            $sql = "SELECT * FROM orders NATURAL JOIN contains NATURAL JOIN products WHERE order_id = $orderid";
            $request = $this->select_all($sql);
            return $request;
        }

        public function intoContains($orderid, $p_id, $price, $quantity, $total)
        {
            $sql = "INSERT INTO contains(order_id, p_id, p_price, product_quantity, p_total_price) VALUES(?,?,?,?,?)";
            $arrData = array($orderid, $p_id, $price, $quantity, $total);
            $request = $this->insert($sql, $arrData);
            return $request;
        }

        public function updateOrder($orderid, $tracking, $trans)
        {
            $sql = "UPDATE orders SET tracking_number = ?, transaction_number = ?, ship_date = 
            DATE_ADD(order_date, INTERVAL 1 DAY), arrival_date = DATE_ADD(order_date, INTERVAL 5 DAY), order_status = 'processed'
            WHERE order_id = ?";
            $arrData = array($tracking, $trans, $orderid);
            $request = $this->update($sql, $arrData);
            return $request;
        }

        public function updateStock($pid, $quantity)
        {
            $sql = "UPDATE products SET stock = stock - ? WHERE p_id = ?";
            $arrData = array($quantity, $pid);
            $request = $this->update($sql, $arrData);
            return $request;
        }

        public function inactive()
        {
            $sql = "UPDATE products SET p_status = ? WHERE stock <= ?";
            $arrData = array('inactive', 0);
            $request = $this->update($sql, $arrData);
            return $request;
        }

        public function active($pid)
        {
            $sql = "UPDATE products SET p_status = 'active' WHERE p_status = 'inactive' AND p_id = ?";
            $arrData = array($pid);
            $request = $this->update($sql, $arrData);
            return $request;
        }

        public function checkProductStock($pid)
        {
            $sql = "SELECT * FROM products WHERE p_id = $pid";
            $request = $this->select($sql);
            return $request;
        }

        public function cancelOrder($orderid)
        {
            $sql = "UPDATE orders SET order_status = 'cancelled' WHERE order_id =?";
            $arrData = array($orderid);
            $request = $this->update($sql, $arrData);
            return;
        }
    }


?>