<?php

    class singleModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function getProduct($product)
        {
            $sql = "SELECT * FROM products WHERE p_id = $product";
            $request = $this->select($sql);
            return $request;
        }

    }
?>