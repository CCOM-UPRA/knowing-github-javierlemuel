<?php

    class Allorders extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function allorders()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Orders";
            $data['page_title'] = "Orders";
            $data['page_name'] = "orders";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "allorders", $data);
        }

        public function getOrders()
        {
            $data = $this->model->getUserOrders($_SESSION['id']);
            return $data;
        }

        public function updateOrders()
        {
            $data = $this->model->getUserOrders($_SESSION['id']);

            foreach($data as $order)
            {
                if($order['arrival_date'] <= date("Y-m-d"))
                {
                    $status = "arrived";
                    $this->model->updateOrdersStatus($order['order_id'], $status);
                }
                else 
                {
                    if($order['ship_date'] <= date("Y-m-d"))
                    {
                        $status = "shipped";
                        $this->model->updateOrdersStatus($order['order_id'], $status);
                    }
                }
            }
            unset($order);
        
            return;
        }

        
    }
?>