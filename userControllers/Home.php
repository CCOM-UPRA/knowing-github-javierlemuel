<?php

    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }


        public function home()
        {
            $data['page_id'] = 1;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Página Principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "home", $data);
        }

        
    }
?>