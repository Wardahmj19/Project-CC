<?php 
require_once 'dbkoneksi.php';

   $kode = $_POST['kode'];
   $nama = $_POST['nama'];
   $harga = $_POST['harga_beli'];
   $stok = $_POST['stok'];
   $minstok = $_POST['min_stok'];
   $deskripsi = $_POST['deskripsi'];
   $kategori = $_POST['kategori_produk_id'];

   $_proses = $_POST['submit'];

   $ar_data[] = $kode;
   $ar_data[] = $nama;
   $ar_data[] = 1.2 * $harga;
   $ar_data[] = $harga;
   $ar_data[] = $stok;
   $ar_data[] = $minstok;
   $ar_data[] = $deskripsi;
   $ar_data[] = $kategori;

   if($_proses == "Simpan"){
    $sql = "INSERT INTO produk (kode, nama, harga_jual, harga_beli, stok, 
    min_stok, deskripsi, kategori_produk_id) VALUES (?,?,?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]= $_POST['idedit'];
    $sql = "UPDATE produk SET kode=?, nama=?, harga_jual=?, harga_beli=?, 
    stok=?, min_stok=?, deskripsi=?, kategori_produk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: kelolaProduk.php');
?>