<?php
    session_start();
    class Changepass extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function changepass()
        {
            $data['page_id'] = 2;
            $data['tag_page'] = "Changepass";
            $data['page_title'] = "Changepass";
            $data['page_name'] = "changepass";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            //$data['getusuarios'] = $this->model->getUsers();
            $this->views->getUserView($this, "changepass", $data);
        }

        public function change()
        {
            $oldPass = $_POST["oldPass"];
            $newPass = $_POST["newPass"];
            $confirmPass = $_POST["confirmPass"];
            $hash = substr(hash('sha512', $_POST["newPass"]), 0, 12);
            $hashOld = substr(hash('sha512', $_POST['oldPass']), 0, 12);
            
            
            $data = $this->model->findUser($_SESSION['id']); //get the "login" info from DB


            if($hashOld !== $data['c_password'])
            {
                header("Location:". base_url()."changepass?error=Old password is incorrect");
        
                exit();
            }
            else if($newPass !== $confirmPass){ //check if password is empty
        
                header("Location:". base_url()."changepass?error=New password fields do not match");
        
                exit();
        
            }else if($data['c_password'] == $hash)
            {
                header("Location:". base_url()."changepass?error=New password matches old password");
        
                exit();
            }
            else{
                $this->model->changePassword($hash, $_SESSION['id']);
                header("Location:". base_url()."changepass?message=New password saved!!");
            }
                   
        }

    }

?>