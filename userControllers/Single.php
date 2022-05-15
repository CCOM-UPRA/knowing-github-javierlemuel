<?php

    session_start();
    class Single extends Controllers{

        private $info;

        public function __construct()
        {
            parent::__construct();
        }

        public function single()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Single";
            $data['page_title'] = "Single";
            $data['page_name'] = "single";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "single", $data);
        }

        public function get()
        {
            $this->info = $_GET["p_id"];
            $_SESSION['info'] = $_GET["p_id"];
            header("Location:". base_url()."single");
        }

        public function showInfo()
        {
            return $this->info;
        }

        public function show()
        {
            $request = $this->model->getProduct( $_SESSION['info']);
            return $request;
        }

        
    }
?>