<?php
include 'config.php';
if(isset($_GET['hal'])){
    if($_GET['hal'] == "ubah"){
        $tampil = mysqli_query($db, "SELECT * FROM tbmhs WHERE id = '$_GET[id]'");
        $data = mysqli_fetch_array($tampil);
        if($data){
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $nim = $data['nim'];
            $jurusan = $data['jurusan'];
        }
    }
}


if(isset($_POST['kirim'])){

    $simpan = mysqli_query($db, "UPDATE tbmhs SET
                                        nama = '$_POST[nama]',
                                        nim = '$_POST[nim]',
                                        jurusan = '$_POST[jurusan]',
                                        alamat = '$_POST[alamat]' WHERE id = '$_GET[id]'");
    
if($simpan){
    echo "<script>
            alert('Edit data sukses!');
            document.location='index.php';
        </script>";
} else {
    echo "<script>
            alert('Edit data Gagal!');
            document.location='index.php';
        </script>";
}
}//ubah data

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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-3">
    <h1 class="mb-3">UBAH DATA MAHASISWA</h1>
<a class="btn btn-success" href="index.php">kembali</a>
<form method="POST">
  <div class="mb-3 mt-3 col-6">
    <label class="form-label">nama</label>
    <input type="text" class="form-control" name="nama" value="<?= $nama?>" >
  </div>
  <div class="mb-3 col-6">
    <label  class="form-label">Nim</label>
    <input type="number" class="form-control" name="nim" value="<?= $nim?>">
  </div>
  <div class="mb-3 col-6">
    <label  class="form-label">jurusan</label>
    <input type="text" class="form-control" name="jurusan" value="<?= $jurusan?>">
  </div>
  <div class="mb-3 col-6">
    <label  class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?= $alamat?>">
  </div>
  <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
</form>
</div>
    <script src="assets/js/bootstrap.bundle.js"></script>
    
</body>

</html>