<link rel="icon" type="image/png" sizes="16x16" href="Assets/images/logo1.png">
<?php include('layouts/header.php'); ?>
<?php 
    $obj = new Account();
    $info = $obj->get();
?>

<section class="my-5 py-5">
    <div class="container-fluid w-50">
        <form method="POST" action="account/set">
            <br><br>
            <h3 class="mb-2 p-2">User Info</h3>
            <p style="color:green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">First Name</label>
                    <input class="form-control" type="text" name="FirstName" value="<?Php echo $info['c_first_name']?>">
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Last Name</label>
                    <input class="form-control" type="text" name="SecondName" value="<?Php echo $info['c_last_name']?>">
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Email</label>
                    <input class="form-control" type="email" name="Email" value="<?Php echo $info['c_email']?>">
                </div>
                <div class="input-group mb-1 p-1">
                    <label onclick="window.location.href='changepass'" title="Change password" 
                    class="passChange input-group-text">Password</label>
                    <input class="form-control" type="password" value="<?Php echo $info['c_password']?>" disabled>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Phone number</label>
                    <input class="form-control" type="phone" name="Phone" value="<?Php echo $info['c_phone_number']?>" required>
                </div>
            <br>
            <h3 class="mb-2 p-2">User Address</h3>

                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Address Line 1</label>
                    <input class="form-control" type="text" name="Line1" value="<?Php echo $info['address_line_1']?>" required>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Address Line 2</label>
                    <input class="form-control" type="text" name="Line2" value="<?Php echo $info['address_line_2']?>" required>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">City</label>
                    <input class="form-control" type="text" name="City" value="<?Php echo $info['c_city']?>" required>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">State</label>
                    <input class="form-control" type="text" name="State" value="<?Php echo $info['c_state']?>" required>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Zip code</label>
                    <input class="form-control" type="text" name="Zip" value="<?Php echo $info['c_zipcode']?>" required>
                </div>
            
            <br>
            <h3 class="mb-2 p-2">Payment Methods</h3>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Card name</label>
                    <input class="form-control" type="text" name="c_name" value="<?Php echo $info['c_card_name']?>" required>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Card type</label>
                    <input class="form-control" type="text" name="c_type" value="<?Php echo $info['c_card_type']?>" required>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Card number</label>
                    <input class="form-control" type="text" name="c_num" value="<?Php echo $info['c_card_number']?>" required>
                </div>
                <div class="input-group mb-1 p-1">
                    <label class="input-group-text">Expiration Date</label>
                    <input class="form-control" type="text" name="c_date" placeholder="YYYY-MM-DD" value="<?Php echo $info['c_exp_date']?>" required>
                </div>

                <input type="submit" class="btn btn-outline-dark" value="Save changes" name="save_changes">
                <a class="btn btn-outline-dark" onclick="history.back()">Cancel</a>
                <br>
        </form>
    </div>

</section>

<?php include('layouts/footer.php'); ?>