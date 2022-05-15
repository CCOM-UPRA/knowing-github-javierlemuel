<?php include('layouts/header.php'); ?>



      
      <!--Login-->
      <section class="my-5 py-5">
          <div class="container text-center mt-3 pt-5">
              <h2 class="form-weight-bold">Change Password</h2>
              <hr class="mx-auto">
          </div>
          <div class="mx-auto container">
              <form id="login-form" method="POST" action="changepass/change">
                <p style="color:red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                <p style="color:green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
                  <div class="form-group">
                      <label>Old Password</label>
                      <input type="password" class="form-control" id="login-password" name="oldPass" placeholder="************" required/>
                  </div>
                  <div class="form-group">
                    <label>New Password</label>
                    <input type="password" class="form-control" id="login-newpassword" name="newPass" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="login-confirmpassword" name="confirmPass" placeholder="Confirm Password" required/>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn" id="login-btn" name="Submit" value="Change Password"/>
                </div>
                <div class="form-group">
                    <input onclick="window.location.href='<?php BASE_URL ?>account'"  class="btn" id="login-btn" name="Return" value="Return"/>
                </div>
              </form>
          </div>
      </section>






      