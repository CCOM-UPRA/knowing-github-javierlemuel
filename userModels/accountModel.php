<?php
    class accountModel extends Mysql{
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

        public function setUser(string $first, string $second, string $email, int $phone, string $state, 
        string $city, string $line1, string $line2, string $zip, int $id, string $c_name, $c_type, $c_num, $c_date)
        {
            $sql = "UPDATE customer SET c_first_name = ?, c_last_name = ?, c_email = ?, 
            c_phone_number = ?, c_state = ?, c_city = ?, address_line_1 = ?, address_line_2 = ?, c_zipcode = ?,
            c_card_name = ?, c_card_type = ?, c_card_number = ?, c_exp_date = ?
            WHERE c_id = ?";
            $arrData = array($first, $second, $email, $phone, $state, $city, $line1, $line2, $zip, $c_name, $c_type, $c_num, $c_date, $id);
            $request_insert = $this->insert($sql, $arrData);
            return $request_insert;
        }

        
    }

?>