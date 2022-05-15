<link rel="icon" type="image/png" sizes="16x16" href="Assets/images/logo1.png">
<?php



if(isset($_POST['remove_product'])){

  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);

  //calculate total
  calculateTotalCart();

  if(empty($_SESSION['cart']))
  {
    unset($_SESSION['cart']);
  }
  //header("Location:". base_url()."cart");



}else if(isset($_POST['edit_quantity']) ){

    //we get id and quantity from the form
   $product_id = $_POST['product_id'];
   $product_quantity = $_POST['product_quantity'];

   if($product_quantity == 0)
   {
      unset($_SESSION['cart'][$product_id]);
    
      //calculate total
      calculateTotalCart();
    
      if(empty($_SESSION['cart']))
      {
        unset($_SESSION['cart']);
      }
   }
   else{

      //get the product array from the session
      $product_array = $_SESSION['cart'][$product_id];

      //update product quantity
      $product_array['product_quantity'] = $product_quantity;


      //return array back its place
      $_SESSION['cart'][$product_id] = $product_array;


      //calculate total
      calculateTotalCart();
  } 
}





function calculateTotalCart(){

     $total_price = 0;
     $total_quantity = 0;

    foreach($_SESSION['cart'] as $key => $value){
 
        $product =  $_SESSION['cart'][$key];

        $price =  $product['product_price'];
        $quantity = $product['product_quantity'];

        $total_price =  $total_price + ($price * $quantity);
        $total_quantity = $total_quantity + $quantity;
        

    }

    $_SESSION['total'] = $total_price;
    $_SESSION['quantity'] = $total_quantity;

}


include('layouts/header.php');


?>





    <!--Cart-->
    <div style="margin: 0; padding: 0;min-height: 100vh;display: flex;flex-direction: column;">
     <div style="flex-grow: 1">
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bolde">Your Cart</h2>
            <p style="color:green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

          <?php if(isset($_SESSION['cart'])){ ?>  

            <?php foreach($_SESSION['cart'] as $key => $value){ ?>

            <tr>
                <td>
                    <div class="product-info">
                        <img title="View Product" class="tohover" onclick="<?php echo "window.location.href='single/get?p_id=".$value['product_id'];?>'" 
                        src="Assets/product-images/<?php echo $value['product_image']; ?>"/>
                        <div>
                            <p><?php echo $value['product_name']; ?></p>
                            <small><span>$</span><?php echo $value['product_price']; ?></small>
                            <br>
                           
                        </div>
                        <form method="POST" action="cart">
                                 <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                                 <input type="submit" name="remove_product" class="remove-btn" value="remove"/>
                            </form>
                    </div>
                </td>

                <td>
                    
                    <form method="POST" action="cart">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
                        <input style="width:50px" type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>"/>
                        <input type="submit" class="edit-btn" value="edit" name="edit_quantity"/>
                    </form>
                    
                </td>

                <td>
                    
                    <span class="product-price">$<?php  echo formatMoney($value['product_quantity'] * $value['product_price']); ?></span>
                </td>
            </tr>

         
            <?php } ?>


            <?php } ?>

         
        </table>


        <div class="cart-total">
          <table>
            <tr>
              <td>Total</td>
              <?php if(isset($_SESSION['cart'])){?>
                 <td>$<?php calculateTotalCart();
                 echo formatMoney($_SESSION['total']); ?></td>
               <?php } ?>  
            </tr>
          </table>
        </div>
    

        <?php if(isset($_SESSION['cart'])) { ?>
        <div class="checkout-container">
          <form method="POST" action="checkout">
             <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout">
          </form>
        </div>
        <?php } ?>


    </section>
    </div>
  <div style="">
          <?php include('layouts/footer.php'); ?>
    </div>

</div>

