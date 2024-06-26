<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM kartu";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>

<?php
     $sqlproduk = "SELECT * FROM produk";
     $rowproduk = $conn->prepare($sqlproduk);
     $rowproduk->execute();
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
                    
                    <li class="nav-item active"><a class="nav-link" href="checkout.php">Checkout</a></li>
                    <li class="nav-item"><a class="nav-link" href="product-details.php">Cart</a></li>
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
              <h4>LET`S GET IT!</h4>
              <h2>Payment</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
        <div class="inner-content">
          <div class="contact-form">
              <form method="POST" action="kelolaPesanan.php">
               <div class="row">
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label for="tanggal" class="control-label">Tanggal Pemesanan:</label>
                              <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                         </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label for="nama" class="control-label">Nama Pemesan:</label>
                              <input type="text" id="nama" name="nama" class="form-control" required>
                         </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label for="alamat" class="control-label">Alamat Pemesan:</label>
                              <input type="text" id="alamat" name="alamat" class="form-control" required>
                         </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label for="noHp" class="control-label">Nomor Handphone:</label>
                              <input type="text" id="noHp" name="noHp" class="form-control" required>
                         </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label for="email" class="control-label">Email:</label>
                              <input type="email" id="email" name="email" class="form-control" required>
                         </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label for="jumlahPesanan" class="control-label">Jumlah Pesanan:</label>
                              <input type="number" id="jumlahPesanan" name="jumlahPesanan" class="form-control" required>
                         </div>
                    </div>
              </div>
              <div class="row">
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label for="deskripsi" class="control-label">Deskripsi:</label>
                              <input type="text" id="deskripsi" name="deskripsi" class="form-control" required>
                         </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                         <div class="form-group">
                              <label class="control-label">Kode Produk:</label>
                              <select id="produk_id" name="produk_id"  class="form-control" required>
                                   <option value="">-- Choose --</option>
                              <?php
                                   while($produk = $rowproduk->fetch(PDO::FETCH_ASSOC)){              
                              ?>
                                   <option value="<?= $produk['id'] ?>"> <?= $produk['kode'] ?> </option>
                              <?php
                                   }
                              ?>
                         </select>
                         </div>
                    </div>
              </div>
              <div class="row">
               <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label class="control-label">Metode Pembayaran:</label>
                         <select id="kartu_id" name="kartu_id"  class="form-control" required>
                              <option value="">-- Choose --</option>
                         <?php
                              while($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)){              
                         ?>
                              <option value="<?= $jenis['id'] ?>"> <?= $jenis['kartu'] ?> </option>
                         <?php
                              }
                         ?>
                         </select>
                    </div>
               </div>
               </div>

                   <div class="form-group">
                        <label class="control-label">
                             <input type="checkbox">

                             I agree with the <a href="#" target="_blank">Terms &amp; Conditions</a>
                        </label>
                   </div>

                   <div class="clearfix">
                        <a href="checkout.php"><button type="button" class="filled-button pull-left">Back</button></a>
                        
                        <button type="submit" name="submit" class="filled-button pull-right">Finish</button>
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

    <!-- Modal -->
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  
</body>
</html>
