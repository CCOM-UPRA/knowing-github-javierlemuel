<?php
session_start();
    class Invoice extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function invoice()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Invoice";
            $data['page_title'] = "Invoice";
            $data['page_name'] = "invoice";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "invoice", $data);
        }

       public function get($orderid)
       {
        if(isset($_GET['id'])){
            $_SESSION['invoice_order'] = $_GET['id'];
        }
        else
        {
            $_SESSION['invoice_order'] = $_POST['id'];
        }
        header("Location:". base_url()."invoice");

        }

        public function userInfo()
        {
            $data = $this->model->getUser($_SESSION['id']);
            return $data;
        }

        public function orderInfo()
        {
            $data = $this->model->getOrder($_SESSION['invoice_order']);
            return $data;
        }

        public function products()
        {
            $data = $this->model->getProducts($_SESSION['invoice_order']);
            return $data;
        }
        
    }
?>