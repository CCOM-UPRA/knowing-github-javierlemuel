<?php

    class shopModel extends Mysql{
        public function __construct()
        {
            parent::__construct();
        }

        public function getAllBrands()
        {
            $sql = "SELECT DISTINCT p_brand FROM products WHERE p_status = 'active'";
            $request = $this->select_all($sql);
            return $request;
        }

        public function getAllVideoRes()
        {
            $sql = "SELECT DISTINCT p_video_res FROM products WHERE p_status = 'active'";
            $request = $this->select_all($sql);
            return $request;
        }

        public function getAllRoles()
        {
            $sql = "SELECT DISTINCT p_role FROM products WHERE p_status = 'active'";
            $request = $this->select_all($sql);
            return $request;
        }

        public function getProducts()
        {
            $sql = "SELECT * FROM products WHERE p_status = 'active'";
            $request = $this->select_all($sql);
            return $request;
        }

        public function getFilters($brand, $video_res, $role, $lprice, $hprice, $order, $orderName)
        {
            $sql = "SELECT * FROM products WHERE p_status = 'active' AND p_brand != ''";

            if($brand !== '')
            {   
                $sql .= "AND p_brand = '$brand'";
            }
            if($video_res !== '')
            {   
                $sql .= "AND p_video_res = '$video_res'";
            }
            if($role !== '')
            {
                $sql .= "AND p_role = '$role'";
            }
            if($lprice !== '')
            {   
                $price = (int)$lprice;
                $sql .= "AND p_price <= $lprice ORDER BY p_price $order, p_name $orderName";
             }if($hprice !== '')
             {   
                $priceH = (int)$hprice;
                $sql .= "AND p_price >= $priceH ORDER BY p_price $order, p_name $orderName";
             }
             if($lprice == '' && $hprice == '')
             {
                 $sql .= "ORDER BY p_name $orderName";
             }
            $request = $this->select_all($sql);
            return $request;
        }

    }
?>