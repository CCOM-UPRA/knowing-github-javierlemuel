<?php session_start(); /* Starts the session */
	
/* Check Login form submitted */	
if(isset($_POST['Submit'])){
  /* Define username and associated password array */
  $logins = array('Alex@gmail.com' => '123456','username1' => 'password1','username2' => 'password2');
  $loginsAdmin = array('Alexa@gmail.com' => '1234', 'username3' => 'password3');
  /* Check and assign submitted Username and Password to new variable */
  $Username = isset($_POST['Email']) ? $_POST['Email'] : '';
  $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
  
  /* Check Client Username and Password existence in defined array */		
  if (isset($logins[$Username]) && $logins[$Username] == $Password){
    /* Success: Set session variables and redirect to Protected page  */
    $_SESSION['UserData']['Email']=$logins[$Username];
    /*Head to User Page*/
    header("location:cart_user.html");
    exit;
  } else {
    /*Unsuccessful attempt: Set error message */
    $msg="<span style='color:red'>Invalid Login Details</span>";
  }

  /*Check Admin Username and Password existence in defined array */
    if (isset($loginsAdmin[$Username]) && $loginsAdmin[$Username] == $Password){
    /* Success: Set session variables and redirect to Protected page  */
    $_SESSION['UserData']['Email']=$loginsAdmin[$Username];
    /*Head to Admin Page*/
    header("location:home_admin.php");
    exit;
  } else {
    /*Unsuccessful attempt: Set error message */
    $msg="<span style='color:red'>Invalid Login Details</span>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="styleG.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 100px;">
    <div class="container-fluid">
    <img style="height: 150px; width: 150px;"src="img/dragonfly_logo.png">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="home.php">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_guest.php">Contact</a>
          </li>
        </ul>
        <div class="d-flex justify-content-right;" style="padding-right: 30px;">
          <form class="d-flex" style="height: 40px; padding-top: 5px;"> 
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
              <div class="dropdown-menu"> 
                <button onclick="togglePopup()" class="first-button1">Login/ Sign Up</button>
              </div>
            </li>
            <li class="nav-item">
              <button type="button" class="btn"><i class="fa fa-shopping-cart fa-lg"></i></button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- log in pop up -->  
  <div class="popup" id="popup-1">
    <div class="content">
      <div class="close-btn1" onclick="togglePopup()">×</div>
      <h4 style=" text-align: center; color: #0f2537; font-weight: bold;">Login</h4>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input name="Email" type="email" class="form-control" style="height: 50px;"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input name="Password" type="password" class="form-control" style="height: 50px;" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div style=" text-align: center; padding: 20px 0px 10px 0px;">
        <button onclick="window.location.href='cart_user.html'" name="Submit" type="submit" class="second-button1" style=" text-align: center;">Login</button>
      </div>
      <p style=" text-align: center;">Don't have an account? <button onclick="togglePopup2()" class="su-button">Sign Up</button></p>
    </div>
  </div>

  <!-- sign up pop up -->
  <div class="popup2" id="popup-2">
    <div class="content">
      <div class="close-btn1" onclick="togglePopup2(),togglePopup()">×</div>
      <h4 style=" text-align: center; color: #0f2537; font-weight: bold;">Sign Up</h4>
      <div class="row row-cols-1 row-cols-md-2 g-4" >
        <div class="col">
          <div class="form-group">
            <label for="name" class="form-label mt-4">Name</label>
            <input type="text" class="form-control" style="height: 50px;" placeholder="Enter name">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="lastname" class="form-label mt-4">Last name</label>
            <input type="text" class="form-control" style="height: 50px;" placeholder="Enter last name">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input type="email" class="form-control" style="height: 50px;"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input type="password" class="form-control" style="height: 50px;" id="exampleInputPassword1" placeholder="Enter password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Confirm password</label>
        <input type="password" class="form-control" style="height: 50px;" id="exampleInputPassword1" placeholder="Confirm password">
      </div>
      <div style=" text-align: center; padding: 20px 0px 10px 0px;">
        <button onclick="window.location.href='cart_user.html'" class="second-button1" style=" text-align: center;">Sign Up</button>
      </div>
    </div>
  </div>

  <!-- log in pop up -->  
  <div class="popup3" id="popup-3">
    <div class="content">
      <div class="close-btn1" onclick="togglePopup3()">×</div>
      <h4 style=" text-align: center; color: #0f2537; font-weight: bold;">Login</h4>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input name="Email" type="email" class="form-control" style="height: 50px;"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input name="Password" type="password" class="form-control" style="height: 50px;" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div style=" text-align: center; padding: 20px 0px 10px 0px;">
        <button onclick="window.location.href='checkout.html'" name="Submit" type="submit" class="second-button1" style=" text-align: center;">Login</button>
      </div>
      <p style=" text-align: center;">Don't have an account? <button onclick="togglePopup4()" class="su-button">Sign Up</button></p>
    </div>
  </div>

  <!-- sign up pop up -->
  <div class="popup4" id="popup-4">
    <div class="content">
      <div class="close-btn1" onclick="togglePopup4(),togglePopup3()">×</div>
      <h4 style=" text-align: center; color: #0f2537; font-weight: bold;">Sign Up</h4>
      <div class="row row-cols-1 row-cols-md-2 g-4" >
        <div class="col">
          <div class="form-group">
            <label for="name" class="form-label mt-4">Name</label>
            <input type="text" class="form-control" style="height: 50px;" placeholder="Enter name">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="lastname" class="form-label mt-4">Last name</label>
            <input type="text" class="form-control" style="height: 50px;" placeholder="Enter last name">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input type="email" class="form-control" style="height: 50px;"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input type="password" class="form-control" style="height: 50px;" id="exampleInputPassword1" placeholder="Enter password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Confirm password</label>
        <input type="password" class="form-control" style="height: 50px;" id="exampleInputPassword1" placeholder="Confirm password">
      </div>
      <div style=" text-align: center; padding: 20px 0px 10px 0px;">
        <button onclick="window.location.href='checkout.html'" class="second-button1" style=" text-align: center;">Sign Up</button>
      </div>
    </div>
  </div>
  
  <script>
    function togglePopup() {
      document.getElementById("popup-1").classList.toggle("active");
    }
  </script>

  <script>
    function togglePopup2() {
      document.getElementById("popup-2").classList.toggle("active");
      document.getElementById("popup-1").classList.toggle("inactive")
    }
  </script>

<script>
    function togglePopup3() {
      document.getElementById("popup-3").classList.toggle("active");
    }
  </script>

  <script>
    function togglePopup4() {
      document.getElementById("popup-4").classList.toggle("active");
      document.getElementById("popup-3").classList.toggle("inactive")
    }
  </script>

<script type="text/javascript">(function(){window['__CF$cv$params']={r:'6d9eb8350e0b67da',m:'K8QMIkljKdaR4HrOCQG5IIzs7OrRnG.X.4.kD70w5mw-1644258942-0-AQ+u9j7a6ryMD7xFGZ4/G+iMNYx7L5tQNR707A0Wb1W0fgp/UZC3ztzILOtN0G0gqpM292OZjnSfYhaa5WEbXQS7wbWmdhipY81+LCOkeKe8TqN2YWhnxR/eWX6VLE6oxKYPISHFFar4Rr6RBWlF0ltEXwefwCmTzvnPXcpYRRRJXxLU4JkOF0rlHHLS+FKFfdYDuEacnIxCva8y6myEZzY=',s:[0x0013933ddb,0x8dfd7d7193],}})();</script>



      <div class="flex-wrapper">
        <div class="regularcontent">
            <section class="main" style="height: auto; min-height: 100%;">
                <div id="user-overlay" style="color:white">
                    <img style="height: 20px; width: 20px; margin-left:85%; margin-top: 150px" src="images/ex.png" onclick="off()">
                <div class="rowz">
                  <div class="columnz">
                      <img style="height: 50%; width: 50%" src="product-images/dji_mavic_mini.jpg">
                  </div>
                  <div class="columnz">
                      <p style="font-size: 40px"> Mavic Mini </p>
                      <p> Price: $369.00 </p>
                      <p> Brand: DJI </p>
                      <p> Video Res: 1020p </p>
                      <p> Wi-fi capability: Yes </p>
                      <p> Stock: 16 </p>
                      <br>
                  <p>
                    <img src="images/add-to-cart.png" style="height: 30px; width: 30px" id="imgClickAndChange" onclick="this.src='images/icon-check.png'"/>
                    <input type="text"
                    name="quantity" value="1" size="2"/>
                  </p>
                  </div><!----Close columnz-->
                  </div><!----Close rowz-->
                  </div><!----Close overlay-->

                

      <div class="contentmain" style="padding-top: 50px;">
        <h1 class="myDIV" style="width: 100%; text-align: center; color: black; font-size: 32px; text-shadow: gray"> Shopping Cart</h1>
        <table style="color: white" class="tutorial-table">
            <tr> 
              <th> Image</th>
              <th> Product Name</th>
              <th> Price</th>
              <th> Quantity</th>
              <th> Total</th>
              <th style="width: 20px"></th>
            </tr>
            <tr>
              <td><img src="product-images/dji_tello.jpg"></td>
              <td title="View Product" onclick="on()" style="cursor:pointer" onMouseOver="this.style.color='lightblue'"
              onMouseOut="this.style.color='white'"> Tello</td>
              <td>$158.00</td>
              <td> <input style="text-align: center;" type="text" name="quantity" value="2" size="2"/> </td>
              <td>$316.00</td>
              <td class="trash-can" value="Delete Row"><img src="images/icon-delete.png" onclick="SomeDeleteRowFunction()"></td>
            </tr>
            <tr>
              <td><img src="product-images/dji_phantom_4_pro.jpg"></td>
              <td title="View Product" onclick="on()" style="cursor:pointer" onMouseOver="this.style.color='lightblue'"
              onMouseOut="this.style.color='white'"> Phantom 4 Pro</td>
              <td>$1,895.00</td>
              <td> <input style="text-align: center;" type="text" name="quantity" value="1" size="2"/> </td>
              <td>$1,895.00</td>
              <td class="trash-can" value="Delete Row"><img src="images/icon-delete.png" onclick="SomeDeleteRowFunction()"></td>
            </tr>
            <tr>
              <td><img src="product-images/dji_mavic_mini.jpg"></td>
              <td title="View Product" onclick="on()" style="cursor:pointer" onMouseOver="this.style.color='lightblue'"
              onMouseOut="this.style.color='white'"> Mavic Mini</td>
              <td>$369.00</td>
              <td> <input style="text-align: center;" type="text" name="quantity" value="1" size="2"/> </td>
              <td>$369.00 </td>
              <td class="trash-can" value="Delete Row"><img src="images/icon-delete.png" onclick="SomeDeleteRowFunction()"></td>
            </tr>
            <tr>
              <td colspan="4" style="text-align: right">Subtotal: </td>
              <td>$2,580.00</td>
              <td></td>
            </tr>
            <tr>
              <td colspan="4" style="text-align: right">Total: </td>
              <td>$2,835.00</td>
              <td></td>
            </tr>
            <tr>
              <td onclick="togglePopup3()" colspan="5" style="text-align: right"> <button class="change btn btn-outline-danger">Proceed to Checkout</button></td>
              <td></td>
            </tr>
            <tr>
              <td onclick="window.location.href='products.php'" colspan="5" style="text-align: right"> <button class="change btn btn-outline-danger">Return to Products</button></td>
              <td></td>
            </tr>
          </table>

        </div>
        </section>
    </div>
      
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="home.php">Home</a></li>
                <li class="list-inline-item"><a href="contact_guest.php">Contact Us</a></li>
               
                
            </ul>
            <p class="copyright">Dragonfly Drones © 2022</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        function on() {
        document.getElementById("user-overlay").style.display = "block";
        }

        function off() {
        document.getElementById("user-overlay").style.display = "none";
        }
    </script>

<script>
  function SomeDeleteRowFunction() {
      // event.target will be the input element.
      var td = event.target.parentNode; 
      var tr = td.parentNode; // the row to be removed
      tr.parentNode.removeChild(tr);
}
</script>

    
</body>

</html>




                

            

                