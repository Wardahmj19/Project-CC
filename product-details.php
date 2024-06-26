<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/a2.jpg">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>WAMUZAH | Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Shopping Store <em>WAMUZAH</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                  </a>
              </li> 

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                  
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="about-us.php">About Us</a>
                    <a class="dropdown-item" href="products.php">Products</a>
                    <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                  </div>
              </li>
              
              <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>
              <li class="nav-item active"><a class="nav-link" href="product-details.php">Cart</a></li>
              <li class="nav-item"><a class="filled-button mt-1" href="login.php">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>GET TO BUY</h4>
              <h2>Product Details</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div>
              <img src="assets/images/gam2.jpg" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4 col-xs-6">
                <div>
                  <a href=""><img src="assets/images/gam4.jpg" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div>
                  <a href=""><img src="assets/images/gam5.jpg" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-xs-6">
                <div>
                  <a href=""><img src="assets/images/gam6.jpg" alt="" class="img-fluid"></a>
                </div>
                <br>
              </div>
            </div>
          </div>

          <div class="col-md-8 col-xs-12">
            <form action="product-out.php" method="post" class="form">
              <h2>Hoodie Essentials</h2>

              <br>

              <p class="lead">
                <small><del> Rp.200.000</del></small><strong class="text-primary">Rp.150.000</strong>
              </p>

              <br>

              <p class="lead">
                Bogor
              </p>
              <br>
              <p class="lead">
                Penilaian: 4.7 | terjual 5 rb
              </p>
              <br>
              <div class="row">
                <div class="col-sm-4">
                  <label class="control-label">Harga</label>
                  <div class="form-group">
                    <input type="number" name="harga" class="form-control" placeholder="">
                  </div>
                </div>
              </div>

              <br> 

              <div class="row">
                <div class="col-sm-4">
                  <label class="control-label">Size</label>
                  <div class="form-group">
                    <select name="size" class="form-control">
                      <option value="">---Silahkan Pilih---</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                      <option value="All Size">All Size</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-8">
                  <label class="control-label">Quantity</label>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="number" name="qty" class="form-control" placeholder="">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <input type="submit" name="submit" value="Checkout" class="btn btn-primary btn-block">
                    </div>
                  </div> 
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>© 2023 | WAMUZAH Store</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
       

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  
  </body>
</html>
