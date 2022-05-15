<?php

    class Index extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Index";
            $data['page_name'] = "index";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "index", $data);
        }

        
    }
?>