<?php

    class Contact extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function contact()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Contact";
            $data['page_title'] = "Contact";
            $data['page_name'] = "contact";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "contact", $data);
        }

        
    }
?>