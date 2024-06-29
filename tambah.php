<?php
include 'config.php';
if(isset($_POST['kirim'])){
  $kirim = mysqli_query($db, "INSERT INTO tbmhs(nama, nim, jurusan, alamat) VALUES ('$_POST[nama]', '$_POST[nim]', '$_POST[jurusan]' '$_POST[alamat]')");
  
  if($kirim){  
     echo "<script>
             alert('Simpan data sukses!');
             document.location='index.php';
         </script>";
 } else {
     echo "<script>
             alert('Simpan data Gagal!');
             document.location='index.php';
         </script>";
       }
  
 }


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-3">
    <h1 class="mb-3">TAMBAH DATA MAHASISWA</h1>
<a class="btn btn-success" href="index.php">kembali</a>
<form method="POST">
  <div class="mb-3 mt-3 col-6">
    <label class="form-label">nama</label>
    <input type="text" class="form-control" name="nama" >
  </div>
  <div class="mb-3 col-6">
    <label  class="form-label">Nim</label>
    <input type="number" class="form-control" name="nim">
  </div>
  <div class="mb-3 col-6">
    <label  class="form-label">jurusan</label>
    <input type="text" class="form-control" name="jurusan">
  </div>
  <div class="mb-3 col-6">
    <label  class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
</form>
</div>
    <script src="assets/js/bootstrap.bundle.js">
      
    </script>
</body>
</html>