<?php include('layouts/header.php'); ?>


<div style="margin: 0; padding: 0;min-height: 100vh;display: flex;flex-direction: column;">
     <div style="flex-grow: 1">
         <!--Orders-->
        <section id="orders" class="orders container my-5 py-5">
            <div class="container mt-5">
                <h2 class="font-weight-bold text-center">Your Orders</h2>
                <hr class="mx-auto">
            </div>

            <?php $obj = new Allorders();
            $obj->updateOrders();
            $data = $obj->getOrders()?>

            <table class="my-5 py-5">
                <tr>
                    <th>Tracking Number</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>Arrival Date</th>
                    <th>Products</th>
                    <th>Invoice</th>
                </tr>


                <?php  
                foreach($data as $orders){ ?>

                  
                          <tr>
                              <td>
                                <?php echo $orders['tracking_number']; ?>
                              </td>

                              <td>
                                $<?php echo formatMoney($orders['total_price']); ?>
                              </td>

                              <td>
                                <?php echo $orders['order_status']; ?>
                              </td>

                              <td>
                                <?php echo $orders['order_date']; ?>
                              </td>

                              <td>
                                <?php echo $orders['arrival_date']; ?>
                              </td>
                            
                              <td>
                                <form method="POST" action="order/getOrderID?id=<?php echo$orders['order_id']?>">
                                  <input class="btn order-details-btn" name="order_details_btn" type="submit" value="View"/>
                                </form>
                              </td>

                              <td>
                                <form method="POST" action="invoice/get?id=<?php echo$orders['order_id']?>">
                                  <input class="btn order-details-btn" name="order_details_btn" type="submit" value="View"/>
                                </form>
                              </td>
                            
                          </tr>
 
                  <?php } ?>        



         
            </table>


          


        </section>
        </div>
  <div style="">
          <?php include('layouts/footer.php'); ?>
    </div>

</div>

