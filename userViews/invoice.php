<html>

<title><?php echo $data['tag_page']?></title>
<link rel="icon" type="image/png" sizes="16x16" href="Assets/images/logo1.png">
<link rel="stylesheet" type="text/css" href="<?= media();?>/css/style.css">



<div style="width:90%">
    <div class="number1" style="width:20%; float:left; padding-left:240px">
        <img class="logo" style="height: 50px; width: 50px" src="Assets/images/dragonfly_logo.png" />
</div>
    <div class="number2" style="margin-left: 0">
        <h2 class="brand">Dragonfly Drones</h2>
        <p>info@dragonflydrones.com</p>
        <p style="padding-left:275px">+1 (787) 456-7891</p>
    </div>
</div>

<br><br>
<hr style="width:100%">
<br>
<?php $obj = new Invoice();
$data = $obj->userInfo();
$order = $obj->orderInfo();
$products = $obj->products();?>

<div style="width: 90%">
    <div class="number1" style="width: 50%; float:left; padding-left: 240px">
        <p><b>Billed To:</b></p>
        <br>
        <p><?php echo $data['c_first_name'];?>&nbsp<?php echo $data['c_last_name'];?></p>
        <p><?php echo $data['address_line_1'];?></p>
        <p><?php echo $data['address_line_2'];?></p>
        <p><?php echo $data['c_city'];?>, <?php echo $data['c_state'];?></p>
        <p><?php echo $data['c_zipcode'];?></p>
        <br>
    </div>

    <div class="number2" style="margin-left: 400px">
        <p style="color:skyblue"> Date Issued</p>
        <p><?php echo $order['order_date'];?></p>
<br>
        <p style="color:skyblue">Transaction Number</p>
        <p><?php echo $order['transaction_number'];?></p>
<br>
    </div>

</div>

<br><br><br>
<table style="padding-left: 240px">
<tr>
    <th style="width:50%; text-align:left">Item</th>
    <th style="width:40%; text-align:center">Quantity</th>
    <th style="width:40%;text-align:right">Subtotal</th>
<?php foreach($products as $prod){?>
<tr>
    <td style="text-align:left"><?php echo $prod['p_name']?></td>
    <td style="text-align:center"><?php echo $prod['product_quantity']?></td>
    <td style="text-align:right">$<?php echo formatMoney($prod['p_total_price'])?></td>
</tr>
<?php } ?>
<tr style="height: 25px;">
    <td colspan="3"></td>
</tr>
<tr>
    <td colspan="3" style="border-top: 1px solid black;text-align:right"><b style="color:skyblue">Total Paid: &nbsp</b>$<?php echo formatMoney($order['total_price']);?></td>
</tr>
</table>



<br>
<button class="return-btn" style="background-color: skyblue; margin-left: 35%" onclick="window.location.href='allorders'"> Return</button>





</html>