<?php include('layouts/header.php'); ?>


<?php



if(!isset($_SESSION['id']))
{
    header("Location:". base_url()."login2");
}










?>
      <!--Checkout-->
      <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Check Out</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
         
            <form id="checkout-form" method="POST" action="order/create">
              <p class="text-center" style="color: red;">
                    <?php if(isset($_GET['message'])){ echo $_GET['message'];}?>
                    <?php if(isset($_GET['message'])) {?>
                       
                         <a href="login.php" class="btn btn-primary">Login</a>

                      <?php } ?>
            
                    </p>
              <?php 
              if(isset($_SESSION['id']))
              {
                $obj = new Checkout();
                $data = $obj->get();
              }?>
              <div class="form-group checkout-small-element">
                  <label>Name</label>
                  <input type="text" class="form-control" id="checkout-name" name="name" value="<?php echo $data['c_first_name']?>" disabled/>
              </div>
              <br>
              <div class="form-group checkout-small-element">
                <label>Address Line 1</label>
                <input type="text" class="form-control" id="checkout-address1" name="address1" value="<?php echo $data['address_line_1']?>" required/>
             </div>
             <div class="form-group checkout-small-element">
                <label>Address Line 2</label>
                <input type="text" class="form-control" id="checkout-address2" name="address2" value="<?php echo $data['address_line_2']?>" required/>
             </div>
              <div class="form-group checkout-small-element">
                  <label>City</label>
                  <input type="text" class="form-control" id="checkout-city" name="city" value="<?php echo $data['c_city']?>" required/>
              </div>
              <div class="form-group checkout-small-element">
                  <label>State</label>
                  <input type="text" class="form-control" id="checkout-state" name="state" value="<?php echo $data['c_state']?>" required/>
            </div>
              <div class="form-group checkout-small-element">
                  <label>Zipcode</label>
                  <input type="text" class="form-control" id="checkout-zipcode" name="zipcode" value="<?php echo $data['c_zipcode']?>" required/>
              </div>

              <br><br>
              <h3 class="mb-2 p-2">Payment Info</h3>
              <div class="form-group checkout-small-element">
                  <label>Card Name</label>
                  <input type="text" class="form-control" id="checkout-cardname" name="cardname" value="<?php echo $data['c_card_name']?>" required/>
              </div>
              <div class="form-group checkout-small-element">
                  <label>Card Type</label>
                  <input type="text" class="form-control" id="checkout-cardtype" name="cardtype" value="<?php echo $data['c_card_type']?>" required/>
              </div>
              <div class="form-group checkout-small-element">
                  <label>Card Number</label>
                  <input type="text" class="form-control" id="checkout-cardnum" name="cardnumber" value="<?php echo $data['c_card_number']?>" required/>
              </div>
              <div class="form-group checkout-small-element">
                  <label>Expiration Date (YYYY-MM-DD)</label>
                  <input type="text" class="form-control" id="checkout-expdate" name="expdate" value="<?php echo $data['c_exp_date']?>" required/>
              </div>
              <div class="form-group checkout-small-element">
                  <label>CVV</label>
                  <input type="text" class="form-control" id="checkout-cvv" name="cvv" placeholder="***" required/>
              </div>


              <div class="form-group checkout-btn-container">
                  <p>Total amount: $<?php echo formatMoney($_SESSION['total']); ?></p>
                  <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place Order"/>
              </div>
            </form>
        </div>
    </section>

    <?php include('layouts/footer.php'); ?>