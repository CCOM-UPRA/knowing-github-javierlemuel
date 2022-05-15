<?php
    class Login2 extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function login2()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Login";
            $data['page_title'] = "Login";
            $data['page_name'] = "login";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "login2", $data);
        }

        public function entrar()
        {
            $email = $_POST["Email"];
            $pass = substr(hash('sha512', $_POST["Password"]), 0, 12);
            
            
            $data = $this->model->findUser($email); //get the "login" info from DB



            if (empty($email)) { //check if email is empty

                header("Location:". base_url()."login2?error=Email is required");
        
                exit();
        
            }else if(empty($pass)){ //check if password is empty
        
                header("Location:". base_url()."login2?error=Password is required");
        
                exit();
        
            }else{
                if (!empty($data)) 
                {
                    if($data['c_status'] == 'inactive')
                    {
                        header("Location:". base_url()."login2?error=Account is inactive");
                    }
                    else if($pass !== $data['c_password'])
                    {
                        header("Location:". base_url()."login2?error=Password is incorrect");
                    }
                    else 
                    {
                        session_start();
                        $_SESSION['email'] = $data['c_email'];
                        $_SESSION['id'] = $data['c_id'];
           
                        srand(make_seed());
                        header("Location:". base_url()."index");
                        exit();
                    }
                }
                else{
                    header("Location:". base_url()."login2?error=Email is not registered to any account");
                    exit();
                }
            }
        }

    }

?>