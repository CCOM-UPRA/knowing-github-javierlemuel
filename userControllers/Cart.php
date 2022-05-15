<?php
     session_start();

    class Cart extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }


        public function cart()
        {
            $data['page_id'] = 5;
            $data['tag_page'] = "Cart";
            $data['page_title'] = "Cart";
            $data['page_name'] = "cart";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "cart", $data);
        }

        
    }
?>