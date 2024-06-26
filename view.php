<?php
    require_once 'dbkoneksi.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $conn->prepare($sql);
    $st->execute([$id]);
    $row = $st->fetch();
    
?>

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
              <li class="nav-item"><a class="nav-link" href="product-details.php">Cart</a></li>
              <li class="nav-item"><a class="filled-button mt-1" href="login.php">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-3-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>about product</h4>
          <h2>Kelola Produk</h2>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <br>
          <table class="table text-center" border="1">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">KODE</th>
                      <th scope="col">NAMA</th>
                      <th scope="col">HARGA JUAL</th>
                      <th scope="col">HARGA BELI</th>
                      <th scope="col">STOK</th>
                      <th scope="col">MIN STOK</th>
                      <th scope="col">DESKRIPSI</th>
                      <th scope="col">KATEGORI</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td><?=$row['id']?></td>
                      <td><?=$row['kode']?></td>
                      <td><?=$row['nama']?></td>
                      <td><?=$row['harga_jual']?></td>
                      <td><?=$row['harga_beli']?></td>
                      <td><?=$row['stok']?></td>
                      <td><?=$row['min_stok']?></td>
                      <td><?=$row['deskripsi']?></td>
                      <td><?=$row['kategori_produk_id']?></td>
                  </tr>
              </tbody>
          </table>
          <div class="clearfix">
              <a href="kelolaProduk.php" class="filled-button pull-right">Back</a>
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