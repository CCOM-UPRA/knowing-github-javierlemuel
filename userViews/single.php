<link rel="icon" type="image/png" sizes="16x16" href="Assets/images/logo1.png">
<?php  

if(isset($_POST['add_to_cart'])){

  //if user has already added a product to cart
  if(isset($_SESSION['cart'])){

     $products_array_ids = array_column($_SESSION['cart'],"product_id"); // [2,3,4,10,15]
     //if product has already been addedcto cart or not
     if( !in_array($_POST['product_id'], $products_array_ids) ){

          $product_id = $_POST['product_id'];
    
            $product_array = array(
                            'product_id' => $_POST['product_id'],
                            'product_name' =>  $_POST['product_name'],
                            'product_price' => $_POST['product_price'],
                            'product_image' => $_POST['product_image'],
                            'product_quantity' => $_POST['product_quantity']
            );
    
            $_SESSION['cart'][$product_id] = $product_array;
            calculateTotalCart();


      //product has already been added
     }else{
       
          $product_id = $_POST['product_id'];
          $_SESSION['cart'][$product_id]['product_quantity'] += $_POST['product_quantity'];
          calculateTotalCart();
         

     }


    //if this is the first product
  }else{

     $product_id = $_POST['product_id'];
     $product_name = $_POST['product_name'];
     $product_price = $_POST['product_price'];
     $product_image = $_POST['product_image'];
     $product_quantity = $_POST['product_quantity'];

     $product_array = array(
                      'product_id' => $product_id,
                      'product_name' => $product_name,
                      'product_price' => $product_price,
                      'product_image' => $product_image,
                      'product_quantity' => $product_quantity
     );

     $_SESSION['cart'][$product_id] = $product_array;
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

?>



<?php include('layouts/header.php'); ?>
      <section class="container single-product my-5 pt-5">
        <div class="row mt-5">

          <?php
          $obj = new Single();
          $product = $obj->show(); 
          
          { ?>
          
            <div class="col-lg-5 col-md-6 col-sm-12">
                <img class="img-fluid w-100 pb-1" src="Assets/product-images/<?php echo $product['p_img']?>" id="mainImg"/>
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <h6><?php echo $product['p_brand']; ?></h6>
                <h3 class="py-4"><?php echo $product['p_name']; ?></h3>
                <h4 class="py-1">Stock: <?php echo $product['stock']; ?></h4>
                <h4 class="py-1">Role: <?php echo $product['p_role']; ?></h4>
                <h4 class="py-1">Wi-fi Availability: <?php echo $product['p_wifi']; ?></h4>
                <h4 class="py-1">Video Resolution: <?php echo $product['p_video_res']; ?></h4>
                <h4 class="py-1">$<?php echo formatMoney($product['p_price']); ?></h4>
                <!-- <h2>$<?php echo $product['p_price']; ?></h2> -->

                <form method="POST" action="single">
                  <input type="hidden" name="product_id" value="<?php echo $product['p_id']; ?>" />
                  <input type="hidden" name="product_image" value="<?php echo $product['p_img']; ?>"/>  
                  <input type="hidden" name="product_name" value="<?php echo $product['p_name']; ?>"/>
                  <input type="hidden" name="product_price" value="<?php echo $product['p_price']; ?>"/>
                  
                      <input type="number" name="product_quantity" value="1"/>
                      <?php if($product['p_status'] !== 'inactive') { ?>
                        <button class="buy-btn" type="submit" name="add_to_cart">Add To Cart</button>
                      <?php } ?>
                </form>

               
                <h4 class="mt-5 mb-5">Product details</h4>
                <span><?php echo $product['p_desc']; ?>
                </span>
            </div>

            <?php } ?>

        </div>
      </section>
    

    <script>

     var mainImg = document.getElementById("mainImg");
     var smallImg = document.getElementsByClassName("small-img"); 


     for(let i=0; i<4; i++){
                    smallImg[i].onclick = function(){
                    mainImg.src = smallImg[i].src;
                }

     }
    </script>

<?php include('layouts/footer.php'); ?>