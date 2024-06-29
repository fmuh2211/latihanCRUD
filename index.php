<?php
 include 'config.php';

 if(isset($_GET['hal']) == "hapus"){

  $hapus = mysqli_query($db, "DELETE FROM tbmhs WHERE id = '$_GET[id]'");

  if($hapus){
      echo "<script>
      alert('Hapus data sukses!');
      document.location='index.php';
      </script>";
  }
};



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
<h1 class="mb-3">
    DATA MAHASISWA
</h1>    
<a class="btn btn-primary" href="tambah.php">tambah data mahasiswa</a>



<table class="table mt-5">
  <thead>
    <tr>    
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">jurusan</th>
      <th scope="col">alamat</th>
      <th scope="col">Aksi</th>
    </tr>
    <tbody>
    <?php   
    $no = 1;
    $tampil = mysqli_query($db, "SELECT * FROM tbmhs");
    while($data = mysqli_fetch_array($tampil)):
    
    ?>
    <tr>
      <th><?=$no++ ?> </th>
      <td> <?=$data['nama'] ?></td>
      <td> <?=$data['nim'] ?></td>
      <td> <?=$data['jurusan'] ?></td>
      <td> <?=$data['alamat'] ?></td>
    
      <td>
        <a class="btn btn-warning" href="ubah.php?hal=ubah&id=<?= $data['id'] ?>">ubah</a>
        <a class="btn btn-danger" href="index.php?hal=hapus&id=<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin menghapus data?')"  >hapus</a>
      </td>
    </tr>
   
  </thead>
  <?php 
    endwhile;
    ?>
  <tbody> 



  </div>
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>