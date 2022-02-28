<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleG.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>
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
            <a class="nav-link active" href="home_user.php">Home
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.html">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_user.html">Contact</a>
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
                <a class="dropdown-item" href="UserPage.php">My Account</a>
                <a class="dropdown-item" href="myOrders.html">My Orders</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="home.php">Sign out</a>
              </div>
            </li>
            <li class="nav-item">
              <button onclick="window.location.href='cart_user.html'" type="button" class="btn"><i class="fa fa-shopping-cart fa-lg"></i></button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <section class="main">
    <div class="container-fluid">
    <div class="d-flex justify-content-center" style="max-width: 100%; height: auto">
      <img src="./img/123.png" style="width:100%;height:auto;">
    </div>
      
        <div class="container">
          <div class="best-selling">
            <h6>Best Selling Drones </h6>
          </div>
          <div class="row row-cols-1 row-cols-md-3 g-4" >
            <div class="col">
              <div class="card h-100">
                <div class="image1">
                  <img src="img/1.png" class="card-img-top">
                </div>
                <div class="card-body" style="text-align: center">
                  <p class="card-text">DJI Mini SE </p>
                  <p class="card-text1">$299.00</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="image1">
                  <img src="img/2.jpg" class="card-img-top">
                </div>
                <div class="card-body" style="text-align: center">
                  <p class="card-text">DEERC Drone </p>
                  <p class="card-text1">$82.44</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="image1">
                  <img src="img/3.jpg" class="card-img-top">
                </div>
                <div class="card-body" style="text-align: center">
                  <p class="card-text"></p>Lozenge Drone </p>
                  <p class="card-text1">$39.99</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="home_user.php">Home</a></li>
                <li class="list-inline-item"><a href="contact_user.html">Contact Us</a></li>
               
                
            </ul>
            <p class="copyright">Dragonfly Drones © 2022</p>
        </footer>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

