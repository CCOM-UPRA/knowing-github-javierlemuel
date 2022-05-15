<?php

    class Checkout extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function checkout()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Checkout";
            $data['page_title'] = "Checkout";
            $data['page_name'] = "checkout";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "checkout", $data);
        }

        public function get()
        {
            $id = $_SESSION['id'];
            $info = $this->model->getUser($id);
            return $info;
        }

        
    }
?>