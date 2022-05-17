<?php include('layouts/header.php'); ?>

      <section class="my-5 py-5">
          <div class="container text-center mt-3 pt-5">
              <h2 class="form-weight-bold">Register</h2>
              <hr class="mx-auto">
          </div>
          <div class="mx-auto container">
              <form id="register-form" method="POST"  action="register/enter">
                <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="lastName" placeholder="Last Name" required/>
                </div>
                  <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="register-confirm-password" name="confirmPassword" placeholder="Confirm Password" required/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" id="register-btn" name="register" value="Register"/>
                </div>
                <div class="form-group">
                    <a id="login-url" href="login" class="btn">Do you have an account? Login</a>
                </div>
              </form>
          </div>
      </section>

      <?php include('layouts/footer.php'); ?>