<?php
    require_once 'dbkoneksi.php';

    $sqlkategori = "SELECT * FROM kategori_produk";
    $rowkategori = $conn->prepare($sqlkategori);
    $rowkategori->execute();  
?>

<?php 
    $idedit = $_GET['idedit'];
    if(!empty($idedit)){
        $sql = "SELECT * FROM produk WHERE id=?";
        $st = $conn->prepare($sql);
        $st->execute([$idedit]);
        $row = $st->fetch();
    }else{
        $row = [];
    }
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
              <h4>about product</h4>
              <h2>Kelola Produk</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
        <div class="inner-content">
          <div class="contact-form">
              <form method="POST" action="prosesProduk.php">
                   <div class="row">
                         <div class="col-sm-6 col-xs-12">
                              <div class="form-group">
                                   <label for="kode" class="control-label">Kode:</label>
                                   <input type="text" id="kode" name="kode" value="<?=$row['kode']?>" class="form-control">
                              </div>
                         </div>
                        <div class="col-sm-6 col-xs-12">
                             <div class="form-group">
                                  <label for="nama" class="control-label">Nama Produk:</label>
                                  <input type="text" id="nama" name="nama" value="<?=$row['nama']?>" class="form-control">
                             </div>
                        </div>
                   </div>
                   <div class="row">
                      <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="harga_beli" class="control-label">Harga Beli Barang:</label>
                            <input type="text" id="harga_beli" name="harga_beli" value="<?=$row['harga_beli']?>" class="form-control">
                        </div> 
                      </div> 
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                  <label for="stok" class="control-label">Jumlah Stok Barang:</label>
                                  <input type="number" id="stok" name="stok" value="<?=$row['stok']?>" class="form-control">
                             </div>
                        </div>
                   </div>
                   
                   <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="min_stok" class="control-label">Minimal Jumlah Barang:</label>
                              <input type="number" id="min_stok" name="min_stok" value="<?=$row['min_stok']?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="deskripsi" class="control-label">Size:</label>
                                <input type="text" id="deskripsi" name="deskripsi" value="<?=$row['deskripsi']?>" class="form-control">
                            </div>
                         </div>
                   </div>

                   <div class="row">
                         <div class="col-sm-6 col-xs-12">
                              <div class="form-group">
                                   <label class="control-label">Kategori Produk:</label>
                                   <select id="kategori_produk_id" name="kategori_produk_id" class="form-control">
                                        <option value="">-- Choose --</option>
                                        <?php
                                             while($kategori = $rowkategori->fetch(PDO::FETCH_ASSOC)){              
                                        ?>
                                             <option value="<?= $kategori['id'] ?>"> <?= $kategori['nama'] ?> </option>
                                        <?php
                                             }
                                        ?>
                                   </select>
                              </div>
                         </div>
                   </div>

                   <div class="clearfix">
                        <?php
                            $button = (empty($idedit)) ? "Simpan":"Update"; 
                        ?>
                          <button type="submit" name="submit" type="submit" 
                            class="filled-button pull-right" value="<?=$button?>">Update</button>
                          <input type="hidden" name="idedit" value="<?=$idedit?>"/>
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