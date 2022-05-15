<?php 
     session_start();
    class Shop extends Controllers{

        public function __construct()
        {
            parent::__construct();
        }

        public function shop()
        {
            $data['page_id'] = 3;
            $data['tag_page'] = "Products";
            $data['page_title'] = "Products";
            $data['page_name'] = "shop";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "shop", $data);
        }

        public function get()
        {
            return $_SESSION['id'];
        }

        public function getBrands()
        {
            $data = $this->model->getAllBrands();
            return $data;
        }

        public function getVideoRes()
        {
            $data = $this->model->getAllVideoRes();
            return $data;
        }

        public function getRole()
        {
            $data = $this->model->getAllRoles();
            return $data;
        }

        public function showproducts()
        {
            $data = $this->model->getProducts();
            return $data;
        }

        public function filter()
        {
            if(isset($_POST['search']))
            {
                $sql = '';
                $_SESSION['brand'] = '';
                $_SESSION['video_res'] = '';
                $_SESSION['role'] = '';
                $_SESSION['lprice'] = '';
                $_SESSION['hprice'] = '';
                $_SESSION['order'] = '';
                $_SESSION['orderName'] = '';

                    if(isset($_POST['brand'])){
                        $_SESSION['brand'] = $_POST['brand'];
                    }
                    if(isset($_POST['video_res'])){
                        $_SESSION['video_res'] = $_POST['video_res'];
                    }
                    if(isset($_POST['role'])){
                        $_SESSION['role'] = $_POST['role'];
                    }
                    if(isset($_POST['lprice'])){
                        if($_POST['lprice'] == '300+')
                        {
                            $_SESSION['hprice'] = '300';
                        }
                        else{
                            $_SESSION['lprice'] = $_POST['lprice'];
                        }
                    }
                    if(isset($_POST['order'])){
                        $_SESSION['order'] = $_POST['order'];
                    }
                    else
                    {
                        $_SESSION['order'] = 'ASC';
                    }

                    if(isset($_POST['orderName'])){
                        $_SESSION['orderName'] = $_POST['orderName'];
                    }
                    else
                    {
                        $_SESSION['orderName'] = 'ASC';
                    }

                    $_SESSION['filter'] = 'on';
                    header("Location:". base_url()."shop"); //take back to products
            }
            else{
                
                $data = $this->model->getFilters($_SESSION['brand'], $_SESSION['video_res'], $_SESSION['role'], $_SESSION['lprice'], $_SESSION['hprice'], $_SESSION['order'], $_SESSION['orderName']);
                return $data;
            }
            

        }

               
    }
?>