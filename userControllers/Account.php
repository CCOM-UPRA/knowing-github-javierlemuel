<?php
session_start();
    class Account extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function account()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Account";
            $data['page_title'] = "Account";
            $data['page_name'] = "account";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "account", $data);
        }

        public function get()
        {
            $id = $_SESSION['id'];
            $info = $this->model->getUser($id);
            return $info;
        }

        public function set()
        {
            if(isset($_POST['save_changes'])){
                $first = $_POST['FirstName'];
                $second = $_POST['SecondName'];
                $email = $_POST['Email'];
                $phone = $_POST['Phone'];
                $state = $_POST['State'];
                $city = $_POST['City'];
                $line1 = $_POST['Line1'];
                $line2 = $_POST['Line2'];
                $zip = $_POST['Zip'];
                $c_name = $_POST['c_name'];
                $c_type = $_POST['c_type'];
                $c_num = $_POST['c_num'];
                $c_date = $_POST['c_date'];
                $id = $_SESSION['id'];

                $this->model->setUser($first, $second, $email, $phone, $state, $city, $line1, $line2, $zip, $id, $c_name, $c_type, $c_num, $c_date);

                header("location:".base_url()."account?message= Changes Saved");
            }
        }

        public function logout()
        {
            if(isset($_GET['error']))
            {
                $error = $_GET['error'];
                $_SESSION = array();
                session_destroy();
                header("Location:".base_url()."login2?error=".$error);
                exit;
            }
            else
            {
                $_SESSION = array();
                session_destroy();
                header("Location:".base_url()."login2");
                exit;
            }

        }

        
    }
?>