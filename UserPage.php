<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_logo/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon_logo/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon_logo/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon_logo/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                  <div class="dropdown-menu" style="left: -15px">
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



  <div class="nav justify-content-center">
    <nav class="nav nav-tabs border border-dark">
        <a data-bs-toggle="tab" class="nav-link text-dark" data-bs-target="#AddressForm">Address</a>
        <a data-bs-toggle="tab" class="nav-link text-dark" href="#DetailsForm">Details</a>
        <button onclick="history.back()" type="submit" class="btn btn-dark ms-1">Save</button>
    </nav>
  </div>

<div id="myTabContent" class="tab-content">
    <form class="tab-pane fade" id="DetailsForm" style="position: absolute; top: 25%; left: 25%; width: 50%;">
        <div class="form-group" style="width: 35%;">
        <label class="form-label mt-4" for="inputName">Name</label>
        <input placeholder="Alex" type="text" class="form-control" placeholder="Enter name" id="inputName">
        </div>
    
        <div class="form-group" style="position: absolute; top: 0; left: 50%; width: 35%;">
        <label class="form-label mt-4" for="inputLastName">Last name</label>
        <input placeholder="Hart" type="text" class="form-control" placeholder="Enter last name" id="inputLastName">
        </div>
    
        <div class="form-group">
        <label class="form-label mt-4" for="inputEmail">Email address</label>
        <input placeholder="alex@gmail.com" type="email" class="form-control" placeholder="Enter email" id="inputEmail">
        </div>
    
        <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckPromotions">
                <label class="form-check-label" for="flexCheckPromotions">
                Receive promotions and discounts
                </label>
            </div>
    
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    

        <div class="form-group">
          <label class="form-label mt-4" for="inputCellphone">Password</label>
          <input placeholder="********" type="password" class="form-control" placeholder="Enter password" id="inputCellphone">
        </div>
    
        <div class="form-group">
        <label class="form-label mt-4" for="inputTelephone">Telephone</label>
        <input placeholder="787-123-4567" type="tel" class="form-control" placeholder="Enter telephone number" id="inputTelephone">
        </div>
    
    </form>

    <form class="tab-pane fade active show" id="AddressForm" style="position: absolute; top: 25%; left: 25%; width: 50%;">

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputAddress1">Address 1</label>
        <input placeholder="St L15 11" type="text" class="form-control" placeholder="Enter address" id="inputAddress1">
        </div>
    
        <div class="form-group">
        <label class="col-form-label mt-4" for="inputAddress2">Address 2</label>
        <input placeholder="Urb Vista Roja" type="text" class="form-control" placeholder="Enter address" id="inputAddress2">
        </div>
    
        <div class="form-group">
        <label class="col-form-label mt-4" for="inputCity">City</label>
        <input placeholder="Arasibo" type="text" class="form-control" placeholder="Enter city" id="inputCity">
        </div>
    
        <div class="form-group">
        <label class="col-form-label mt-4" for="inputState">State</label>
        <input placeholder="PR" type="text" class="form-control" placeholder="Enter city" id="inputState">
        </div>
    
        <h1 class="text-center">Payment Methods</h1>

        <br>
    
    <div class="tab-content">
      <div>
          <ul class="nav justify-content-center">
            <li class="active">
              <input data-bs-toggle="tab" href="#CreditDiv" type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
              <label class="btn btn-outline-dark" for="btnradio1">Credit Card</label>
            </li>
            <li>
              <input data-bs-toggle="tab" href="#DebitDiv" type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" >
              <label class="btn btn-outline-dark" for="btnradio2">Debit Card</label>
            </li>
            <li>
              <input data-bs-toggle="tab" href="#PaypalDiv" type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" >
              <label class="btn btn-outline-dark" for="btnradio3">Paypal</label>
            </li>

          </ul>

        <div class="nav justify-content-center">
          <img src="https://www.merchantequip.com/image/?logos=v|m|p&height=32" alt="Merchant Equipment Store Credit Card Logos"/>
          <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
            <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
          </svg>
        </div>
      </div>
      <div class="tab-pane fade active show" id="CreditDiv" style="padding-top: 10%">

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputCreditNum">Card Number</label>
        <input placeholder="123412341234" type="text" class="form-control" placeholder="Enter card number" id="inputCreditNum">
        </div>

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputExpDateCredit">Expiration date</label>
        <input placeholder="01/22" type="date" class="form-control" placeholder="Enter city" id="inputExpDateCredit">
        </div>

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputPin">Pin</label>
        <input placeholder="****" type="text" class="form-control" placeholder="Enter pin" id="inputPin">
        </div>
        
      </div>

      <div class="tab-pane fade" id="DebitDiv" style="padding-top: 10%">

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputDebitNum">Card Number</label>
        <input placeholder="123412341234" type="text" class="form-control" placeholder="Enter card number" id="inputDebitNum">
        </div>

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputExpDateDebit">Expiration date</label>
        <input placeholder="01/22" type="date" class="form-control" placeholder="Enter city" id="inputExpDateDebit">
        </div>
        
      </div>

      <div class="tab-pane fade" id="PaypalDiv" style="padding-top: 10%">

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputPaypalEmail">Email</label>
        <input placeholder="alex@gmail.com" type="text" class="form-control" placeholder="Enter card number" id="inputPaypalEmail">
        </div>

        <div class="form-group">
        <label class="col-form-label mt-4" for="inputPaypalPass">password</label>
        <input placeholder="********" type="text" class="form-control" placeholder="Enter password" id="inputPaypalPass">
        </div>
        
      </div>

      <figure class="text-center" style="position: absolute; top: 950px; ">
      <blockquote class="blockquote">
        <p class="mb-0">Any of the information provided here will never be shared to any third party user or company. Please secure your information always</p>

      </blockquote>
      </figure>

    </div>
        
    
    </form>

    
</div>

    </body>
</html>