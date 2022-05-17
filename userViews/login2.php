<?php include('layouts/header.php'); ?>



      
      <!--Login-->
      <section class="my-5 py-5">
          <div class="container text-center mt-3 pt-5">
              <h2 class="form-weight-bold">Login</h2>
              <hr class="mx-auto">
          </div>
          <div class="mx-auto container">
              <form id="login-form" method="POST" action="login2/entrar">
                <p style="color:red" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                  <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="login-email" name="Email" placeholder="Email" required/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="login-password" name="Password" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <input type="submit" name="Submit" class="btn" id="login-btn" name="Submit" value="Login"/>
                </div>
                <div class="form-group">
                    <a id="register-url" href="register" class="btn">Don't have account? Register</a>
                </div>
              </form>
          </div>
      </section>






      <?php include('layouts/footer.php'); ?>