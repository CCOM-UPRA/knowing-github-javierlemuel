<?php

    class Errors extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function notFound()
        {
            $this->views->getUserView($this, "error");
        }
    }

    $notFound = new Errors();
    $notFound->notFound();
?>