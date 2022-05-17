
<link rel="icon" type="image/png" sizes="16x16" href="Assets/images/logo1.png">
<?php 

if(isset($_POST['add_to_cart'])){

    //if user has already added a product to cart
    if(isset($_SESSION['cart'])){
  
       $products_array_ids = array_column($_SESSION['cart'],"product_id"); 
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

include('layouts/header.php');

if($_SESSION['filter'] !== 'on')
{ ?>
<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
<?php } ?>
  
<?php
  $obj = new Shop();
  $pr = $obj->showProducts();
  if(isset($_SESSION['filter']))
  {
      if($_SESSION['filter'] == 'on')
      {
          $pr = $obj->filter();
          $_SESSION['filter'] = 'off';
      }
  }
  ?>


 



    <br>
<div style="margin: 0; padding: 0;min-height: 100vh;display: flex;flex-direction: column;">
     <div style="flex-grow: 1">
 <section id="search" class="my-3 py-3 ms-2">
    <div class="container mt-3 py-1">
      <p>Search Products</p>
      <hr>
    </div>

        <form class="myForm" action="shop/filter" method="POST">
            <div class="row mx-auto container">
           <div class="col-lg-12 col-md-12 col-sm-12">
           <p><b>Names</b></p>
           <div class="form-check">
                <input class="form-check-input" value="ASC" type="radio" name="orderName" id="orderName" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "A-Z"?>
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="DESC" type="radio" name="orderName" id="orderName" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Z-A"?>
                </label>
              </div>
            

           </div>
         </div>
            
         <div class="row mx-auto container">
           <div class="col-lg-12 col-md-12 col-sm-12">

            <p><b>Brand</b></p>
            <div class="form-check">
                <input class="form-check-input" placeholder="All" value="" type="radio" name="brand" id="brand" >
                <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo "All" ?>
                </label>
              </div>
            <?php 
            $br = $obj->getBrands();
            
            foreach($br as $brandFilter)
            {?>

               <div class="form-check">
                <input class="form-check-input" value="<?php echo $brandFilter['p_brand']?>" type="radio" name="brand" id="brand" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo $brandFilter['p_brand']?>
                </label>
              </div>
              <?php }?>

           </div>
         </div>

         <div class="row mx-auto container">
           <div class="col-lg-12 col-md-12 col-sm-12">

            <p><b>Video Resolution</b></p>
            <div class="form-check">
                <input class="form-check-input" placeholder="All" value="" type="radio" name="video_res" id="video_res" >
                <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo "All" ?>
                </label>
              </div>
            <?php 
            $vr = $obj->getVideoRes();
            foreach($vr as $videoFilter)
            {?>

               <div class="form-check">
                <input class="form-check-input" value="<?php echo $videoFilter['p_video_res']?>" type="radio" name="video_res" id="video_res" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo $videoFilter['p_video_res']?>
                </label>
              </div>
              <?php }?>

           </div>
         </div>

         <div class="row mx-auto container">
           <div class="col-lg-12 col-md-12 col-sm-12">

            <p><b>Role</b></p>
            <div class="form-check">
                <input class="form-check-input" placeholder="All" value="" type="radio" name="role" id="role" >
                <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo "All" ?>
                </label>
              </div>
            <?php 
            $rr = $obj->getRole();
            foreach($rr as $roleFilter)
            {?>

               <div class="form-check">
                <input class="form-check-input" value="<?php echo $roleFilter['p_role']?>" type="radio" name="role" id="role" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo $roleFilter['p_role']?>
                </label>
              </div>
              <?php }?>

           </div>
         </div>

         <div class="row mx-auto container">
           <div class="col-lg-12 col-md-12 col-sm-12">
         <p><b>Pricing</b></p>
            <div class="form-check">
                <input class="form-check-input" placeholder="All" value="" type="radio" name="lprice" id="lprice" >
                <label class="form-check-label" for="flexRadioDefault1">
                    <?php echo "All" ?>
                </label>
              </div>

               <div class="form-check">
                <input class="form-check-input" value="75" type="radio" name="lprice" id="lprice" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Under $75"?>
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="150" type="radio" name="lprice" id="lprice" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Under $150"?>
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="200" type="radio" name="lprice" id="lprice" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Under $200"?>
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="300" type="radio" name="lprice" id="lprice" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Under $300"?>
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="300+" type="radio" name="lprice" id="lprice" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Above $300"?>
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="ASC" type="radio" name="order" id="order" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Ascending Order"?>
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" value="DESC" type="radio" name="order" id="order" >
                <label class="form-check-label" for="flexRadioDefault1">
                  <?php echo "Descending Order"?>
                </label>
              </div>

           </div>
         </div>
          


          <div class="form-group my-3 mx-3">
            <input type="submit" name="search" value="Search" class="btn btn-primary">
          </div> 

            </form>

  </section>

<br><br>
  <section id="shop" class="my-0 py-0">
    <div class="container mt-0 py-0">
      <h3>Our Products</h3>
      <hr>
      <p>Here you can check out our products</p>
    </div>
    <div class="row mx-auto container">

    <div style="display: none" class="result" id="result">
            </div>

     <?php 
    foreach($pr as $product)
    {?>

        
      <div class="result product text-center col-lg-3 col-md-4 col-sm-12">
        <a href="<?php echo "single/get?p_id=".$product['p_id']?>">
        <img class="tohover" title="View Product" class="img-fluid mb-3" src="Assets/product-images/<?php echo $product['p_img']?>"/>
        </a>
         <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h5 class="p-name"><?php echo $product['p_name']; ?></h5>
        <h4 class="p-price">$<?php echo $product['p_price'];?></h4>
        <form method="POST" action="shop">
                  <input type="hidden" name="product_id" value="<?php echo $product['p_id']; ?>" />
                  <input type="hidden" name="product_image" value="<?php echo $product['p_img']; ?>"/>  
                  <input type="hidden" name="product_name" value="<?php echo $product['p_name']; ?>"/>
                  <input type="hidden" name="product_price" value="<?php echo $product['p_price']; ?>"/>
                  
                      <input type="number" name="product_quantity" min="0" max="999" value="1"/>
                      <br>
                      <button class="buy-btn" type="submit" name="add_to_cart">Add To Cart</button>
                </form>


      </div>
      

      <?php } ?>

      


   
    <br><br><br><br><br><br><br><br><br><br><br>
    
  </section>
          </div>
  <div style="">
          <?php include('layouts/footer.php'); ?>
    </div>

</div>
          
         
         

  <script type="text/javascript">
    $(document).ready(function(){


        $('#myForm').on("submit",function(e){
            e.preventDefault();
            $.post('products/filter', $(this).serialize(), function(response){
                $('#result').html(response);
                document.getElementById("result").style.display = "block";
            });
        });

        function get_filter_text(text_id){
            var filterData = [];
            $('#'+text_id+':checked').each(function()
            {
                filterData.push($(this).val());
            });
            return filterData;
        }
    });
    </script>



