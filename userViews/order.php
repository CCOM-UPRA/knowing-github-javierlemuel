<link rel="icon" type="image/png" sizes="16x16" href="Assets/images/logo1.png">
<?php include('layouts/header.php'); ?>
       

<div style="margin: 0; padding: 0;min-height: 100vh;display: flex;flex-direction: column;">
     <div style="flex-grow: 1">
  <section id="orders" class="orders container my-5 py-5">
            <div class="container mt-5">
                <h2 class="font-weight-bold text-center">Order details</h2>
                <hr class="mx-auto">
            </div>

            <table class="mt-4 pt-4 mx-auto">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th> 
                </tr>


                <?php $obj = new Order();
            $data = $obj->getOrder();
            ?>
                <?php foreach($data as $row){  ?>
                          <tr>
                              <td>
                                <div class="product-info">
                                <a href="<?php echo "single/get?p_id=".$row['p_id']?>">
                                <img class="tohover" title="View Product" class="img-fluid mb-3" 
                                src="Assets/product-images/<?php echo $row['p_img']?>"/>
                                </a>
                                    <div>
                                        <p class="mt-3"><?php echo $row['p_name'];?></p>
                                    </div>
                                </div> 
                                
                              </td>
                              <td>
                            <?php echo $row['product_quantity']?>

                            </td>

                              <td>
                                <span>$<?php echo formatMoney($row['p_total_price']);?></span>
                              </td>
                            
                            
                          </tr>

                  <?php } ?>



         
            </table>

            <?php if($data[0]['order_status'] != 'arrived'){?>
            <button class="return-btn" style="background-color: skyblue; margin-left: 45%" onclick="window.location.href='order/cancel'"> Cancel Order</button>
              <?php } ?>

        </section>
        </div>
  <div style="">
          <?php include('layouts/footer.php'); ?>
    </div>

</div>