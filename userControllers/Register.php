<?php

    session_start();
    class Register extends Controllers{

        private $info;

        public function __construct()
        {
            parent::__construct();
        }

        public function register()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Register";
            $data['page_title'] = "Register";
            $data['page_name'] = "register";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "register", $data);
        }

        public function enter()
        {
            if(isset($_POST['register'])){

                $name = $_POST['name'];
                $lastname = $_POST['lastName'];
                $email = $_POST['email'];
                $password= $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
              
                //if passwords dont match
                if($password !== $confirmPassword){
                  header('location: register?error=Passwords do not match');
                }
                
                else if(strlen($password) < 8){
                    header('location: register?error=Password must be at least 8 charachters');
                }

            //if there is no error
                else{
                    //check whether there is a user with this email or not
                    $password = substr(hash('sha512', $_POST["password"]),0,12);
                    $user = $this->model->findUser2($name, $lastname, $email);

                    //if there is a user already registered with this email
                    if(!empty($user)){
                        header('location: register?error=User with this email already exists');
                    }
                    
                    else{
                        //create a new user

                        //HASH THE PASSWORD
                        $this->model->createUser($name, $lastname, $email, $password);

                        $user = $this->model->findUser2($name, $lastname, $email);
                    

                        //if account was created successfully
                        if(!empty($user)){
                                //$_SESSION['c_id'] = $user_id;
                                $_SESSION['c_email'] = $email;
                                $_SESSION['c_firstname'] = $name;
                                $_SESSION['c_lastname'] = $lastname;
                                $_SESSION['logged_in'] = true;
                                $_SESSION['id'] = $user['c_id'];
                                header("Location:". base_url()."products");

                            //account could not be created
                        }
                        
                        else{

                                header('location: register?error=Could not create an account at the moment');
                        }
                    }

                }
            
            }

        }
    }
?>