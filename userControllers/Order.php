<?php

session_start();
    class Order extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }


        public function order()
        {
            $data['page_id'] = 5;
            $data['tag_page'] = "Order";
            $data['page_title'] = "Order";
            $data['page_name'] = "order";
            $data['page_content'] = "Este es mi nombre. Mi nombre es este.";
            $this->views->getUserView($this, "order", $data);
        }

        public function create()
        {
            //Update user account
             
            
                $user = $this->model->findUser($_SESSION['id']);
                if($user['c_status'] == 'inactive')
                {
                    header("Location:". base_url()."account/logout?error=Account is inactive");
                    exit;
                }

                $this->model->updateUser($_POST['address1'], $_POST['address2'], $_POST['city'], $_POST['state'], $_POST['zipcode'], 
                $_POST['cardname'], $_POST['cardtype'], $_POST['cardnumber'], $_POST['expdate']);
            //initialize order

                $this->model->createOrder($_SESSION['id'], date("Y-m-d"), $_SESSION['total'], 'temp');

            //get present order id
                $data = $this->model->getOrderID();
            
            //check stock
            foreach($_SESSION['cart'] as $key1 => $value1)
            {
                $product = $this->model->checkProductStock($value1['product_id']);

                if($product['stock'] < $value1['product_quantity'])
                {
                    header("Location:". base_url()."cart?message=".$value1['product_name']." exceeds stock amount");
                    exit;
                }

            }
            unset($key1);
            unset($value1);

            //dep($_SESSION['cart']);
            //pass cart to order and remove quantities from products

            foreach($_SESSION['cart'] as $key => $value){
                //echo $data['order_id'];
                //echo "Entered";
                $this->model->intoContains($data['order_id'], $value['product_id'], $value['product_price'], 
                $value['product_quantity'], $value['product_price'] * $value['product_quantity']);
                //echo "Processed";

                $this->model->updateStock($value['product_id'], $value['product_quantity']);
            }

            unset($key);
            unset($value);


            //change to inactive any product that gets 0 or less stock

            $this->model->inactive();

            //finalize info of order

            $tracking = trackingGenerator();
            $trans = transactionGenerator();
            $this->model->updateOrder($data['order_id'], $tracking, $trans);

            //empty cart from session and subtract amounts from DB cost

            unset($_SESSION['cart']);
            unset($_SESSION['quantity']);

            //go to order page

            header("Location:". base_url()."invoice/get?id=".$data['order_id']."");
        }

        public function getOrderID()
        {
            $_SESSION['order_id'] = $_GET['id'];
            // echo $_SESSION['order_id'];
            header("Location:". base_url()."order");
        }

        public function getOrder()
        {
            $data = $this->model->getOneOrder($_SESSION['order_id']);
            return $data;
        }

        public function cancel()
        {
            $this->model->cancelOrder($_SESSION['order_id']);
            $data = $this->model->getOneOrder($_SESSION['order_id']);

            foreach($data as $order)
            {
                $quantity = $order['product_quantity'] / -1;

                $this->model->updateStock($order['p_id'], $quantity);
                $this->model->active($order['p_id']);
            }

            header("Location:". base_url()."allorders");
        }

        
    }