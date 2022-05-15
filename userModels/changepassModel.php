<?php
    class changepassModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function findUser(int $id)
        {
            $query_insert = "SELECT * FROM customer WHERE c_id=$id";
            $request_select = $this->select($query_insert);
            return $request_select;
        }

        public function changePassword($hash, $id)
        {
            $sql = "UPDATE customer SET c_password = ? WHERE c_id = ?";
            $arrData = array($hash, $id);
            $request = $this->update($sql, $arrData);
            return;
        }

        
    }

?>